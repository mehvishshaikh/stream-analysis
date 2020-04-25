<?php
error_reporting(0);

$title = "COMMERCE";
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
      0 => "Are you confident in handling other people's money?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
3 => array(
      0 => "Can you analyze a set of financial information?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
4 => array(
      0 => "Can you interpret any financial situation?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
5 => array(
      0 => "Would you ever like to formulate mathematical model for an economial crisis?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
6 => array(
      0 => "Are you interested in business administration?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
7 => array(
      0 => "Are you interested in investment handlling?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
8 => array(
      0 => "Are you interested in the law and order of our country?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
9 => array(
      0 => "Do you want to learn more about economic concepts of our country?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
10 => array(
      0 => "Are you concerned with taxation and its analysis?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
11 => array(
   0 => "What does GST stand for?",
   1 => "Goods and Service Tax",
   2 => "General Sales Tax",
   3 => "Goods and Supply Tax",
   4 => "Government Sales Tax",
   6 => 1
),
12 => array(
   0 => "Price and demand are positively corelated in the case of______",
   1 => "normal goods",
   2 => "giffen goods",
   3 => "comforts",
   4 => "luxuries",
   6 => 2
),
13 => array(
   0 => "In India, GST came effective from July 1st, 2017 India has chosen _____ model of dual GST?",
   1 => "China",
   2 => "US",
   3 => "Canadian",
   4 => "Japan",
   6 => 3
),
14 => array(
   0 => "Ajay purchased 5kg apples for Rs.300 and 5kg bananas for Rs.270. He sold apples for Rs.560 and bananas for Rs.320. What is the profit?",
   1 => "300",
   2 => "320",
   3 => "370",
   4 => "310",
   6 => 4
),
15 => array(
   0 => "The primary function of an office is ____________",
   1 => "making,using and preserving records",
   2 => "management",
   3 => "remuneration personnel",
   4 => "authority means",
   6 => 1
),
16 => array(
   0 => "Cost price(CP) =",
   1 => "SP/ (100 - Loss) x 100",
   2 => "SP/ (100 + Loss) x 100",
   3 => "(Loss - 100)/ SP x 100",
   4 => "(Loss + 100)/ SP x 100",
   6 => 1
),
17 => array(
   0 => "Selling price(SP) =",
   1 => "100/ (100+profit) x CP",
   2 => "(100 + profit)/ 100 x CP",
   3 => "100/ (100+profit) x CP",
   4 => "(100 - profit)/ 100 x CP    ",
   6 => 2
),
18 => array(
   0 => "A shopkeeper purchased 400 pencils for 600 and sold each pencil for 2. How much does he earn in each pencil",
   1 => "1",
   2 => "0.5",
   3 => "1.5",
   4 => "2.5",
   6 => 2
),
19 => array(
   0 => "Find 1/9 as a %",
   1 => "11.12",
   2 => "11.121",
   3 => "11.112",
   4 => "11.11",
   6 => 4
),
20 => array(
   0 => "Business means ______________",
   1 => "commerce",
   2 => "industry and commerce",
   3 => "trade and commerce",
   4 => "selling and buying of goods",
   6 => 2
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
<!--
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
}
// -->
</SCRIPT>

</HEAD>
<BODY>

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

<BR> 1. <INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php print $a[$randval2][1] ; ?>
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
