<?php include 'user_header.php'; ?>
<section class="section-padding">
    <?php
        $division = array("OFFICE OF THE DIRECTOR-GENERAL",
                          "CENTER FOR INTERNATIONAL RELATIONS AND STRATEGIC STUDIES",
                          "CARLOS P. ROMULO SCHOOL OF DIPLOMACY",
                          "ADMINISTRATIVE AND FINANCIAL SERVICES DIVISION"
        );    
        $section = array( 
            array("ODG PROPER <br /> Claro S. Cristobal 4981",
                "INSTITUTIONAL LINKAGES UNIT",
                "PUBLICATION SECTION",
                "LIBRARY SECTION",
                "DFA SECURITY SERVICES",
                "ASEANA Consular Affairs Office",
				"...B...",
				"...B..."), 
            array("OFFICE OF THE HEAD",
                "TRADITIONAL SECURITY STUDIES SECTION",
                "NON-TRADITIONAL SECURITY STUDIES SECTION",
                "INTERNATIONAL SECURITY STUDIES SECTION",
                "AREA STUDIES SECTION 1",
                "AREA STUDIES SECTION 2",
                "ASEAN PROGRAMS SECTION",
                "SPECIAL PROJECTS SECTION"),
            array("OFFICE OF THE HEAD",
                "CORE PROGRAMS SECTION",
                "PROFESSIONAL & TECHNICAL PROGRAMS SECTION",
                "LANGUAGE PROGRAMS SECTION",
                "SPECIAL PROGRAMS SECTION",
                "SCHOLARSHIP PROGRAMS SECTION",
                "TRAINING EVALUATION SECTION",
                "INTERNATIONAL PROGRAMS/ E-LEARNING SECTION"),
            array("OFFICE OF THE HEAD",
                "PERSONNEL SECTION",
                "FINANCIAL MANAGEMENT SECTION",
                "INTERNAL AUDIT SECTION",
                "GENERAL SERVICES SECTION",
                "MANAGEMENT INFORMATION SYSTEMS SECTION",
                "CSC in DFA",
                "COA in DFA")
        );
        $divisionlength = count($division);
        $sectionlength = count($section);
        $totalSec = array_sum(array_map("count", $section)); //Counts Multidimensional Array
        #echo $sectionlength;
        #echo $totalSec;
    ?>
    <table>
        <!-- Divisions row -->
        <?php
            echo '<tr>';
            for($div=0; $div<=$divisionlength; $div++){
                #echo "<th>"; echo $division[$div]; echo "</th>";
                if($div==4){
                        break;
                    }
                echo '<th>'; echo $division[$div]; echo '</th>';
            }
            echo '</tr>';
        ?>
    
        <!-- Sections row -->
        <?php
            for($x=0; $x<=($totalSec/$sectionlength)-1; $x++){
                echo '<tr>';
                for($y=0; $y<=$sectionlength; $y++){
                    #echo '<td>'; echo $section[$y][$x]; echo '</td>';
                    #echo "<td>"; echo $section[$y][$x]; echo "</td>";
                    if($y==4){
                        break;
                    }
                    if($sectionlength==NULL){
                        break;
                    }
                    else{
                        echo '<td>';
						echo $section[$y][$x]; '</td>';
                    }
                }
                echo '</tr>';
            }
        ?>      
    </table>
</section>
<?php include 'footer.php'; 
