<?php

$date = $_POST['date'];
// echo $date;
$mood = $_POST['mood'];
$bestthing = $_POST['bestthing'];
$worstthing = $_POST['worstthing'];
$reflections = $_POST['reflections'];

if(isset($date) && isset($mood) && isset($bestthing) && isset($worstthing) && isset($reflections))
{
    $output0 ='<div class="container">
    <div class="col-lg-12 col-12">
        <h2 class="text-center mb-5">';
    $output1 ='</h2>
    </div>
    <div class="mx-2 mb-5 d-flex justify-content-center ideas">
        <div class="col-lg-6 order-1 pb-4 text-center"><img src="images/icons/plant.svg" class="img-fluid" alt="" style="width:120px; height:120px">
        </div>
        <div class="col-lg-6 order-2 text-center">';
    $output2 ='</div>
    </div>
    <div class="row mx-2 mb-5 d-flex align-items-center ideas">
        <div class="col-lg-6 order-2 text-center"><img src="images/icons/goal.svg" class="img-fluid result-icon" alt="" style="width:120px; height:120px"></div>
        <div class="col-lg-6 order-1 text-center pb-4">';
    $output3 ='</div>
    </div>
    <div class="row mx-2 mb-5  d-flex align-items-center ideas">
        <div class="col-lg-6 order-1 text-center pb-4"><img src="images/icons/help.svg" class="img-fluid result-icon" alt="" style="width:120px; height:120px"></div>
        <div class="col-lg-6 order-2 text-center">';
        $output4='</div>
        </div>
        <div class="row mx-2 mb-5  d-flex align-items-center ideas">
            <div class="col-lg-6 order-2 text-center"><img src="images/icons/stars.svg" class="img-fluid result-icon" alt="" style="width:120px; height:120px"></div>
            <div class="col-lg-6 order-1 text-center pb-4">';
        $output5='</div>
        </div>
        </div>';
    if($mood == "Sad")
    {
        $output=$output0.' Here are our tips for you based on your mood'.$output1.'Take a bathe'.$output2.'Take a walk'.$output3.'<a href="https://www.supportgroupscentral.com/groups_detail.cfm?cid=18&CFID=3614146&CFTOKEN=de0dcac139db5ee5-9BE78AFD-DB19-1669-166EE6F537A9F01F
            ">Join support groups </a>'.$output5;
    }
    else if($mood == "Stressed")
    {
        $output=$output0.' Here are our tips for you based on your mood'.$output1.'Do some breathing exercises'.$output2.'Clean your room'.$output3.'Watch something funny'.$output4.'Sleep well'.$output5;
           
    }
    else if($mood == "Tired")
    {
        $output=$output0.' Here are our tips for you based on your mood'.$output1.'Cut out Caffeine'.$output2.'Drink more water '.$output3.'Eat something sweet'.$output4.'Meditate'.$output5;
    }
    else if($mood == "Angry")
    { 
        $output=$output0.' Here are our tips for you based on your mood'.$output1.'Visualize yourself calm down, would the thing you’re mad about matter in 5 years? If not, stop worrying about it'.$output2.'Separate your emotions from your actions'.$output3.'Distract yourself with something fun'.$output4.'Discuss your anger with someone'.$output5;
    }
    else if($mood == "Okay")
    {
        $output=$output0.' Here are our tips for you based on your mood'.$output1.'Practice a hobby like painting'.$output2.'Eat out at a new restaurant'.$output3.'Pretty yourself up (get a haircut, put on nice clothes)'.$output5;

    }
    else if($mood == "Excited")
    {
        $output=$output0.' Here are our tips for you based on your mood'.$output1.'Compliment someone'.$output2.'Encourage someone to do something they’ve always wanted to '.$output3.'Tell a good (or a bad) joke'.$output5;

    }
    else if($mood == "Happy")
    {
        $output=$output0.' Here are our tips for you based on your mood'.$output1.'Hold the door for strangers'.$output2.'Reach out to an old friend'.$output3.'Make dessert for your family or friends'.$output5;

    }

    echo json_encode(array('status' => 'success', 'result' => $output));
}