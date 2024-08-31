<?php
	
$exercises = [
	[
		"id" => 1,
		"name" => "Saying Hello",
		"slug" => "saying-hello",
		// "queryString" => "work/e4p/$slug/form/?lang="
		"description" => "&#34;Hello, World!&#34;",
		"constraints" => [
			"constraintA",
			"constraintB",
			"constraintC"
		],

		"challenges" => [
			"challengeA" => [
				"pass" => true,
				"notes" => [
					"note",
					"note",
					"note"
				]
			],
			"challengeB" => [
				"pass" => false,
				"notes" => [
					"note",
					"note",
				]
			]
		],

		"versions" => [
			"php" => [
				"form" => "$querystring'php'",
				"constraints" => [],
				"challenges" => [],
				// they kinda need to inherit from the original one, and then specifically have passes/fails and notes uh oh. complex data.
			]
		],

		// as an example, what it would look lke if i simply copied the information and avoided any inheritance...

		"versions" => [
			"php" => [
				"form" => "$querystring'php'",
				"constraints" => [
					"constraint",
					"constraint,"
					"constraint"
				],
				"challenges" => [
					"challengeA" => [
						"pass" => true,
						"notes" => [
							"note",
							"note",
							"note"
						]
					],
					"challengeB" => [
						"pass" => false,
						"notes" => [
							"note",
							"note",
						],
					],
				],
				// they kinda need to inherit from the original one, and then specifically have passes/fails and notes uh oh. complex data.
			]
		]


		//a simple iteration

	// 	"php" => "work/e4p/$slug/form/php",
	// 	"php" => "work/e4p/$slug/form/?lang='php'",
	// ],
	[

	]
];