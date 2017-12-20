<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($lang='tag', $book_name = 'Mateo',$chapter=1,$verse_from=21,$verse_to=21, $book_id = NULL)
	{
		$data['assets_url'] = $this->config->item('assets_url');
		
		if( $book_name == 'Mateo' AND ($lang == 'eng' OR $lang == 'rtpv') )
		{
			$book_name = 'matthew';
		}
		
		if($lang == 'eng'){
			$table = 'eng_books';
			$ver = 'English King James Version';
		}elseif($lang == 'rtpv'){
			$table = 'rtpv_books';
			$ver = 'Tagalog Popular Version';
		}elseif($lang == 'tpv'){
			$table = 'tpv_books';
			$ver = 'Magandang Balita Biblia';
		}elseif($lang == 'psv'){
			$table = 'psv_books';
			$ver = 'Pangasinan Bible (Say Biblia)';
		}elseif($lang == 'bicol'){
			$table = 'bicol_books';
			$ver = 'Bicol Bible (An Biblia)';
		}elseif($lang == 'ilokano'){
			$table = 'ilokano_books';
			$ver = 'Ilocano Bible (Ti Biblia)';
		}elseif($lang == 'pnt'){
			$table = 'pnt_books';
			$ver = 'Pampango Popular Version (1994)';
		}
		else{
			$table = 'tag_books';
			$ver = 'Tagalog King James Version';
		}	
		
		#BAGONG SALIN
		#TAGALOG
		#PANGASINAN
		#ILOKANO
		
		$book_name = ucfirst(str_replace("%20",' ',$book_name));	
		
		if(is_null($book_id)){
			$qry = " AND BIBLETEXT = '$book_name'";
		}else{
			$qry = " AND VERSE = '$book_id'";
		}
			
		$bq = $this->db->query("SELECT * 
								FROM $table 
								WHERE BOOK = 0 
								AND CHAPTER = 10 
								$qry");
					
		$book = $bq->row('VERSE');
		
		if(!is_null($book_id)){
			$book_name = $bq->row('BIBLETEXT');
		}
		
		if($verse_from < $verse_to){
			$book_title = "$book_name $chapter:$verse_from-$verse_to";
		}else{
			$book_title = "$book_name $chapter:$verse_from";
		}
		$data['ver'] = $ver;
		$data['table'] = $table;
		$data['lang'] = $lang;
		$data['book_title'] = $book_title;
		$data['chapter'] = $chapter;
		$data['book'] = $book;
		$data['verse_from'] = $verse_from;
		$data['verse_to'] = $verse_to;
		$data['book_name'] = $bq->row('BIBLETEXT');
		
		$query = $this->db->query("  SELECT * 
							FROM $table
							WHERE BOOK = $book
							AND CHAPTER = $chapter
							AND VERSE BETWEEN $verse_from AND $verse_to");
							
		$data['query'] = $query;
		
		
		
		$this->load->view('welcome_message',$data);
	}
	
	function save_verse()
	{
		$book = $_POST['book'];
		$chapter = $_POST['chapter'];
		$verse_from = $_POST['verse_from'];
		$verse_to = $_POST['verse_to'];
		$lang = $_POST['lang'];
		
		#CHECK IF MERON NA GANUNG VERSE
		$date = date('Y-m-d');	
		$query = $this->db->query("SELECT * 
				  FROM verses_history WHERE book = $book AND chapter = $chapter AND verse_from = $verse_from
			  	  AND verse_to = $verse_to  AND date = '$date'");	
			  	  
		if($query->num_rows() == 0)
		{
				
		
			$datas = array( 'book'=>$book, 
							'chapter'=>$chapter, 
							'verse_from'=>$verse_from, 
							'verse_to'=>$verse_to,
							'date'=>$date,
							'ver'=>$lang
							);
				
			$this->db->insert('verses_history',$datas);
			
			$output = array('output' => 1);
		}
		else
		{
			$output = array('output' => 0);
		}
		
		echo json_encode($output);
			
	}
	
	function verses_history()
	{
		$str = '
		
		<table border=1 width="100%" style="border-collapse:collapse; ">
		
		<tr>
			<td><strong></strong>#</td>
			<td><strong>Verse</strong></td>
			<td><strong>Action</strong></td>
		</tr>';
		
		
		$date = date('Y-m-d');
		
		$x = $this->db->query("SELECT *
						  FROM verses_history A
						  LEFT JOIN tag_books B ON A.book = B.verse
						  WHERE B.chapter = 10
						  AND B.book = 0
						  AND A.date = '$date'
						");
		$ctr = 1;
		foreach($x->result() as $row):
		
		if($row->verse_from < $row->verse_to){
			$book_title = "$row->BIBLETEXT $row->chapter:$row->verse_from-$row->verse_to";
		}else{
			$book_title = "$row->BIBLETEXT $row->chapter:$row->verse_from";
		}
		
		$str .= '<tr style="padding:5px">
			<td>'.$ctr++.'.</td>
			<td>&nbsp;'.$book_title.'</td>
			<td><a id="goto" href="'.site_url('welcome/index/'.$row->ver."/x/".$row->chapter.'/'.$row->verse_from.'/'.$row->verse_to.'/'.$row->book).'"> Go to verse</a></td>
		</tr>';
		endforeach;
		
		
		
		
	$str .'</table>';

		$output = array('output' => $str);
		
		echo json_encode($output);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */