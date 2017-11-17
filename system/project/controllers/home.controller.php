<?php

//All the elements that you want to show on the page
$firstrow = new view('home/firstrow');
$secondrow = new view('home/secondrow');
$thirdrow = new view('home/thirdrow');
$fourthrow = new view('home/fourthrow');

//Import the page-layout
$page_layout = new view('home/page_layout');
$page_layout->firstrow = $firstrow;
$page_layout->secondrow = $secondrow;
$page_layout->thirdrow = $thirdrow;
$page_layout->fourthrow = $fourthrow;

// set thte title of the page
presenter::setTitle('Homepage');

// give the layout to the presenter to present
presenter::present($page_layout);