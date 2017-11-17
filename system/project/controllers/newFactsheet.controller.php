<?php

//All the elements that you want to show on the page
$firstrow = new view('newFactsheet/firstrow');

//Import the page-layout
$page_layout = new view('newFactsheet/page_layout');
$page_layout->firstrow = $firstrow;

// set thte title of the page
presenter::setTitle('newFactsheet');

// give the layout to the presenter to present
presenter::present($page_layout);