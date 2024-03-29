<?php
//考试题库一
return [
	//题库标题
	'title' => 'PHP基础语法考试题（一）',
	//答题时限（秒数）
	'timeout' => 1800,
	//题库
	'data' => [
		//判断题
		'binary' => [
			'name' => '判断题', //题型名称
			'score' => 20,     //题型分数
			'data' => [
				1 => [
					'question' => '使用PHP写好的程序，在Linux和Windows平台上都可以运行。',
					'answer' => 'yes'
				], 2=> [
					'question' => 'PHP可以支持MySQL数据库，但不支持其它的数据库。',
					'answer' => 'no'
				], 3=> [
					'question' => 'PHP有很多流行的MVC框架，这些框架可以使PHP的开发更加快捷。',
					'answer' => 'yes'
				], 4=> [
					'question' => 'Zend Studio是PHP中常用的IDE（集成开发环境）。',
					'answer' => 'yes'
				], 5=> [
					'question' => '进行PHP程序开发时，可以借助软件和工具来提高效率。',
					'answer' => 'yes'
				]
			]
		],
		//单选题
		'single' => [
			'name' => '单选题',
			'score' => 30,
			'data' => [
				1 => [
					'question' => '设有定义：double a[10]，*s=a;以下能够代表数组元素a[3]的是（ ）。',
					'option' => [
						'($s)[3]','}(s+3)','*s[3]','}s+3'
					],
					'answer' => 'B'
				], 2=> [
					'question' => '设有以下语句：typedef struct TY{char C;int a{4 1;}CIN;则下面叙述中正确的是（ ）',
					'option' => [
						'CIN是struct Tr类型的变量','TT是struct类型的变量','可以用，l，r定义结构体变量','可以用CIN定义结构体变量'
					],
					'answer' => 'D'
				], 3=> [
					'question' => 'PHP支持多种风格的标记，以下不是PHP标记的是（ ）。',
					'option' => [
						'<?php  ?>','<?     ?>','<!--    -->','<%    %>'
					],
					'answer' => 'C'
				], 4=> [
					'question' => '下列选项中，函数返回的关键字是（ ）。',
					'option' => [
						'back','go','return','break'
					],
					'answer' => 'C'
				], 5=> [
					'question' => 'PHP中存在多种变量，其中在函数内部定义的变量称之为（ ）。',
					'option' => [
						'可变变量','局部变量','全局变量','内部变量'
					],
					'answer' => 'B'
				]
			]
		],
		//多选题
		'multiple' => [
			'name' => '多选题',
			'score' => 30,
			'data' => [
				1 => [
					'question' => '下列选项中，关于数据类型的说法描述正确的是（ ）。',
					'option' => [
						'浮点数指的是数学中的小数，不能保存整数','在双引号内的变量会被解析，而单引号内的变量会被原样输出','布尔类型只有true和false两个值，且区分大小写','对于整数59可以使用十六进制数0x3b进行表示'
					],
					'answer' => ['B','D']
				], 2=> [
					'question' => '下列选项中，可以作为PHP的输出语句的是（ ）。',
					'option' => [
						'echo','var_dump','print_r','以上答案都不正确'
					],
					'answer' => ['A','B','C']
				], 3=> [
					'question' => '下面关于if语句的说法正确的是（ ）。',
					'option' => [
						'if语句也成为单分支语句','if语句的判断条件是布尔类型数据','if语句的判断条件是一个字符串类型数据','以上答案都不正确'
					],
					'answer' => ['A','B']
				], 4=> [
					'question' => '下列选项中，可以用来操作数组的运算符是（ ）。',
					'option' => [
						'联合 +','自增 ++','相等 ==','全等 ===',
					],
					'answer' => ['A','C','D']
				], 5=> [
					'question' => '若在当前运行的脚本中需要调用其他文件的函数，可以使用以下哪个语句（ ）。',
					'option' => [
						'import','namespace','include','require'
					],
					'answer' => ['C','D']
				]
			]
		],
		//填空题
		'fill' => [
			'name' => '填空题',
			'score' => 20,
			'data' => [
				1 => [
					'question' => 'Apache的httpd服务程序默认使用的是____端口。',
					'answer' => '80'
				], 2=> [
					'question' => '在PHP中，____函数能将数组转化为字符串。',
					'answer' => 'implode'
				]
			]
		]
	]
];