<?php
return array(
	$this->view => [
		'search' => [
			'U-обр',
			'витк',
			'медь',
			'TERMOWATT',
			'KAWAI',
			'ATN',
		],
		'replace' => [
			'<span class="blue">U-обр</span>',
			'<span class="red">витк</span>',
			'<span class="red">медь</span>',
			'<span class="blue">TERMOWATT</span>',
			'<span class="green">KAWAI</span>',
			'<span class="white">ATN</span>',
		]
	],
	'order' => '`param0`, `param2`, `param4`, `param3`'
);