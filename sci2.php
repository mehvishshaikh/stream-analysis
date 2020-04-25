<?php
error_reporting(0);

$title = "SCIENCE";
$address = "testpage.html";
$randomizequestions ="yes"; 

$a = array(
   1 => array(
      0 => "Are you difficult to deal with huge sets of numbers and data?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 2
   ),
   2 => array(
      0 => "Would you work in a scientific laboratory?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
   ),
   3 => array(
      0 => "Are you interested in solving technical issues?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
   ),
   4 => array(
      0 => "Do you get bored to solve mathematical and chemical equations?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 2
   ),
   5 => array(
      0 => "Would you want to work on technical issues?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
   ),
   6 => array(
      0 => "Are you interested in learning about life cycle and survival of various species?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
   ),
   7 => array(
      0 => "Would you pursue a career in giving medical aid to patients?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
   ),
   8 => array(
      0 => "Would you work on programming software or hardware?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
   ),
   9 => array(
      0 => "Does the physical knowledge and topics bore you?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 2
   ),
   10 => array(
      0 => "Would you conduct experiments to prove any theory?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
   ),
11 => array(
   0 => "Which of the following body systems is responsible for responding to changes?",
   1 => "Immune system",
   2 => "Endocrine system",
   3 => "Nervous system",
   4 => "Harmonic system",
   6 => 3
),
12 => array(
   0 => "Which of the following does not play a role in maintaining health of an organism?",
   1 => "Gene expression",
   2 => "Cell death",
   3 => "Sexual reproduction",
   4 => "Mitosis",
   6 => 3
),
13 => array(
   0 => "Catalysts helps the rate of a chemical reaction to ____",
   1 => "decrease",
   2 => "ignite",
   3 => "increase",
   4 => "none",
   6 => 3
),
14 => array(
   0 => "What are alternative forms of genes called?",
   1 => "Chromosomes",
   2 => "Autosomes",
   3 => "Alleles",
   4 => "Chromatids",
   6 => 3
),
15 => array(
   0 => "Anemophily is pollination by____",
   1 => "wind",
   2 => "ants",
   3 => "birds",
   4 => "bats",
   6 => 1
),
16 => array(
   0 => "Oxygen and ozones are ____",
   1 => "isotropes",
   2 => "isomers",
   3 => "allotropes",
   4 => "isobars",
   6 => 3
),
17 => array(
   0 => "Major component is LPG is ____",
   1 => "ethane",
   2 => "butane",
   3 => "methane",
   4 => "propane",
   6 => 2
),
18 => array(
   0 => "What is the use of a galvanometer?",
   1 => "to measure voltage",
   2 => "to measure resistance",
   3 => "to measure electric currents",
   4 => "to measure capacitance",
   6 => 3
),
19 => array(
   0 => "The concept of inertia was developed by?",
   1 => "Aristotle",
   2 => "Galileo",
   3 => "Huygen",
   4 => "Newton",
   6 => 2
),
20 => array(
   0 => "Which colour has the maximum wavelength?",
   1 => "Black",
   2 => "Violet",
   3 => "White",
   4 => "Red",
   6 => 4
),
);

$max=20;

$question=$_POST["question"] ;

if ($_POST["Randon"]==0){
        if($randomizequestions =="yes"){$randval = mt_rand(1,$max);}else{$randval=1;}
        $randval2 = $randval;
        }else{
        $randval=$_POST["Randon"];
        $randval2=$_POST["Randon"] + $question;
                if ($randval2>$max){
                $randval2=$randval2-$max;
                }
        }
        
$ok=$_POST["ok"] ;

if ($question==0){
        $question=0;
        $ok=0;
        $percentaje=0;
        }else{
        $percentaje= Round(100*$ok / $question);
        }
?>

<HTML><HEAD><TITLE>Multiple Choice Questions:  <?php print $title; ?></TITLE>
<LINK rel="stylesheet" href="testpapers.css">

<SCRIPT LANGUAGE='JavaScript'>
function Goahead (number){
        if (document.percentaje.response.value==0){
                if (number==<?php print $a[$randval2][6] ; ?>){
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                        document.percentaje.ok.value++
                }else{
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                }
        }
        //if (number==<?php print $a[$randval2][6] ; ?>){
        //        document.question.response.value="Correct"
        //}else{
        //        document.question.response.value="Incorrect"
        //}
}
</SCRIPT>

</HEAD>
<BODY BGCOLOR=FFFFFF>

<CENTER>
<H1><?php print "$title"; ?></H1>
<TABLE BORDER=0 CELLSPACING=5 WIDTH=500>

<?php if ($question<$max){ ?>

<TR><TD ALIGN=RIGHT>
<FORM METHOD=POST NAME="percentaje" ACTION="<?php print $URL; ?>">

<BR><input type=submit style="height: 30px; width: 100px;" value="Next >>">
<input type=hidden name=response value=0>
<input type=hidden name=question value=<?php print $question; ?>>
<input type=hidden name=ok value=<?php print $ok; ?>>
<input type=hidden name=Randon value=<?php print $randval; ?>>
<br><?php print $question+1; ?> / <?php print $max; ?>
</FORM>
<HR>
</TD></TR>

<TR><TD>
<FORM METHOD=POST NAME="question" ACTION="">
<?php print "<b>".$a[$randval2][0]."</b>"; ?>
 
<BR> 1. <INPUT TYPE=radio style="width:15px; height:15px;"NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php print $a[$randval2][1] ; ?>
<BR> 2. <INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="2"  onClick=" Goahead (2);"><?php print $a[$randval2][2] ; ?>
<?php if ($a[$randval2][3]!=""){ ?>
<BR> 3. <INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="3"  onClick=" Goahead (3);"><?php print $a[$randval2][3] ; } ?>
<?php if ($a[$randval2][4]!=""){ ?>
<BR> 4. <INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="4"  onClick=" Goahead (4);"><?php print $a[$randval2][4] ; } ?>
<?php if ($a[$randval2][5]!=""){ ?>
<BR> 5. <INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="5"  onClick=" Goahead (5);"><?php print $a[$randval2][5] ; } ?>


</FORM>

<?php
}else{
?>
<TR><TD ALIGN=Center>
<!-- The Quiz has finished
<BR>Percentaje of correct responses: <?php print $percentaje ; ?> %
<p><A HREF="<?php print $address; ?>">Home Page</a> -->
<?php 

include 'certificate.php';
?>
<p><A HREF="<?php print $address; ?>"><input type=submit style="height:50px; width: 250px; background-color: #4CAF50; border-radius:20px; font-size: 20px;"value="Return to test"></a> 
<?php
}?>

</TD></TR>
</TABLE>

</CENTER>
</BODY>
</HTML>
