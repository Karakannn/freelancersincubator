<?php

return [
	
	'user-management' => [
		'title' => 'User Management',
		'created_at' => 'Time',
		'fields' => [
		],
	],
	
	'permissions' => [
		'title' => 'Permissions',
		'created_at' => 'Time',
		'fields' => [
			'title' => 'Title',
		],
	],
	
	'roles' => [
		'title' => 'Roles',
		'created_at' => 'Time',
		'fields' => [
			'title' => 'Title',
			'permission' => 'Permissions',
		],
	],
	
	'users' => [
		'title' => 'Users',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
			'email' => 'Email',
			'password' => 'Password',
			'role' => 'Role',
            'linkedin_url' => 'Linkedin URL',
            'facebook_url' => 'Facebook URL',
            'twitter_url' => 'Twitter URL',
            'website_url' => 'Website URL',
            'phone' => 'Phone',
            'presentation' => 'Presentation',
			'remember-token' => 'Remember token',
		],
	],
	
	'courses' => [
		'title' => 'Courses',
		'created_at' => 'Time',
        'registered' => 'You are registered to this course',
		'fields' => [
			'teachers' => 'Teachers',
			'title' => 'Title',
			'slug' => 'Slug',
			'description' => 'Description',
			'price' => 'Price',
			'duration' => 'Duration',
			'course-image' => 'Course image',
			'start-date' => 'Start date',
			'start-time' => 'Start time',
			'published' => 'Published'
		],
	],
	
	'lessons' => [
		'title' => 'Lessons',
		'created_at' => 'Time',
		'fields' => [
			'course' => 'Course',
			'title' => 'Title',
			'slug' => 'Slug',
			'lesson-image' => 'Lesson image',
			'short-text' => 'Short text',
			'full-text' => 'Full text',
			'position' => 'Position',
			'downloadable-files' => 'Downloadable files',
			'free-lesson' => 'Free lesson',
			'published' => 'Published',
            'is_live' => 'Live ?',
            'url' => 'URL',
            'availabiliy' => 'Available on'
		],
	],
	
	'questions' => [
		'title' => 'Questions',
		'created_at' => 'Time',
		'fields' => [
			'question' => 'Question',
			'question-image' => 'Question image',
			'score' => 'Score',
		],
	],
	
	'questions-options' => [
		'title' => 'Questions options',
		'created_at' => 'Time',
		'fields' => [
			'question' => 'Question',
			'option-text' => 'Option text',
			'correct' => 'Correct',
		],
	],
	
	'tests' => [
		'title' => 'Tests',
		'created_at' => 'Time',
		'fields' => [
			'course' => 'Course',
			'lesson' => 'Lesson',
			'title' => 'Title',
			'description' => 'Description',
			'questions' => 'Questions',
			'published' => 'Published',
		],
	],
    'testimonials' => [
		'title' => 'Testimonials',
		'created_at' => 'Time',
		'fields' => [
			'title' => 'Title',
			'image' => 'Image',
			'client' => 'Client',
			'position' => 'Position',
			'created_at' => 'Created On',
		],
	],
    'settings' => [
		'title' => 'Settings',
		'fields' => [
			'title' => 'Title',
		],
	],
    'slider' => [
		'title' => 'Slider',
		'fields' => [
			'image' => 'Image',
            'line_1' => 'Line 1',
            'line_2' => 'Line 2',
            'line_3' => 'Line 3',
            'button_text' => 'Button Text',
            'button_url' => 'Button URL',
		],
	],
    'blog' => [
		'title' => 'Blog',
		'fields' => [
			'image' => 'Image',
            'title' => 'Title',
            'body' => 'Body'
		],
	],
    'header' => [
		'title' => 'Header',
		'fields' => [
			'image' => 'Image',
            'page' => 'Page',
		],
	],
    'info' => [
		'title' => 'Company Info',
		'fields' => [
            'phone' => 'Phone Number',
            'address' => 'Office Location',
            'email' => 'Email Address',
            'header_logo' => 'Header Logo',
            'footer_logo' => 'Footer Logo',
		],
	],
    'menu' => [
        'home'=> 'Home',
        'webinars' => 'Webinars',
        'blog' => 'Blog',
        'video_courses' => 'Video Courses',
        'about' => 'About',
        'lecturer' => 'Become A Lecturer',
        'contact' => 'Contact',
        'auth' => 'Register/Login',
        'my_profile' => 'My Profile',
	],
    'footer' => [
        'SUPPORT'=> 'Support',
        'PRIVACY' => 'Privacy Policy'
	],
    'ACCOUNT' => [
        // Account Page Data
        'YOUR_COURSES' => 'Your Courses',
        'ACCOUNT_PROFILE' => 'Edit Profile',
        'ACCOUNT_DOB' => 'Date of birth',
        'ACCOUNT_ADDRESS' => 'Address',
        'ACCOUNT_UPDATE' => 'Update',
        'ACCOUNT_CHANGE_PASS' => 'Change Password',
        'ACCOUNT_OLD_PASS' => 'Old Password',
        'REGISTER_FORM_ENTER_PASSWORD' => 'Choose Password',
        'NO_COURSES' => 'You haven\'t registered for any courses yet.'
	],
    'course_details' => [
        // Course Details Page
        'LABEL_INSTRUCTOR' => 'Instructor',
        'LABEL_PRICE' => 'Course Price',
        'LABEL_DURATION' => 'Course Duration',
		'LABEL_START' => 'Date',
        'LABEL_FREE' => 'Free',
        'CURRENCY_SYMBOL' => 'лв',
        'LABEL_DESCRIPTIOM' => 'Description',
        'LABEL_LESSONS' => 'Lessons',
        'LABEL_DETAILS' => 'Course Details',
        'LABEL_QUICK_CONTACT' => 'Quick Contact',
        'LESSONS_BUTTON' => 'Button_title',
		'SIMILAR_COURSES' => 'Similar Courses'
	],
    'blog_details' => [
        // Course Details Page
        'LABEL_DETAILS' => 'Blog Details',
        'LABEL_BY' => 'By'
	],
    'login' => [
        // Login Form Data
        'LOGIN_TITLE' => 'Go to your profile',
        'LOGIN_SUBTITLE' => 'Login To Your Account',
        'LOGIN_BODY' => 'Use the form to login to your Freelancers Incubator profile.',
        'LOGIN_FORM_TITLE' => 'Login Form Data',
        'LOGIN_FORM_SUBTITLE' => 'Login Form Data Subtitle',
        'LOGIN_FORM_EMAIL' => 'Your Email',
        'LOGIN_FORM_PASSWORD' => 'Your Password',
        'LOGIN_FORM_FORGOT_PASS' => 'Forgot Password',
        'LOGIN_FORM_REGISTER' => 'Register',
        'LOGIN_FORM_LOGIN' => 'Login',
		'FPASS_FORM_TITLE' => 'Password recovery',
		'FPASS_FORM_TITLE_2' => 'Reset your password',
		'FPASS_FORM_TITLE_3' => 'If you have lost your account password, simply enter your email address below',
		'FPASS_FORM_TITLE_5' => 'If you have lost your password, enter your email address below:'
	],
	'sec2' => [
        // Login Form Data
        'STR_TIT1' => 'The perfect instrument for your career upgrade',
		'STR_SUB_TIT1' => ' ',
		'STR_TIT2' => 'You organize yourself your learning schedule ',
		'STR_SUB_TIT2' => ' ',
		'STR_TIT3' => 'Learn with a lecturer in a virtual classroom',
		'STR_SUB_TIT3' => ' ',
		'STR_TIT4' => 'A webinar attendance certificates recognized by the community ',
		'STR_SUB_TIT4' => ' ',
		'STR_TIT5' => 'Webinars available on any device',
		'STR_SUB_TIT5' => ' ',
		'STR_TIT6' => 'Analysis of cases and examples of good practices ',
		'STR_SUB_TIT6' => ' ',
		'MAIN_TITLE' => 'Why should you create an account?',
		'MAIN_SUB_TITLE' => ' As a free subscriber, you become a global skill builder.'
	],
    'webinar' => [
        // Webinar Form Data
        'WEBINAR_TITLE' => 'Are you a successful<br>Freelancer?',
        'WEBINAR_SUBTITLE' => 'Become a mentor',
        'WEBINAR_BODY' => 'Our community consists of thousands of newbie freelancers, that are looking for advices and good examples related to the start of a successful freelance activity.<br><br>
If you are a successful and experienced freelancer, then you can do a lot for the community! Now you have the opportunity to help those who are struggling with their start of freelance job from scratch. To be a lecturer on the platform Freelancers incubator has really strong advantages for you:
		<ul style="color:#FFFFFF;">
			<li>- You will assist in their personal and professional development other people all over the globe</li>
			<li>- Your webinar will be available on the platform forever; you will thus reach an impressive number of followers</li>
			<li>- You will build your authority as a top expert and a good lecturer</li>
			<li>- You will gain quality links and valuable traffic to your site or online profile</li>
		</ul>
		<br>
		<h4 style="color:#FFFFFF;">How to become a lecturer?</h4>
		<span style="color:#FFFFFF;">You must first specify a topic, by filling our online form with contact details and the title of your webinar. Its duration is 60 minutes + time for questions and answers. Add a brief and a more detailed description of the webinar. All webinars are released in English!</span>',
        'WEBINAR_FORM_TITLE' => 'Propose a webinar',
        'WEBINAR_FORM_SUBTITLE' => 'Become a famous lectorer in Freelancers Incubator by proposing a webinar',
        'WEBINAR_FORM_COUNTRY' => 'What is your country ?',
        'WEBINAR_FORM_WEBINAR_TITLE' => 'Title of your webinar',
        'WEBINAR_FORM_HOURS_LONG' => 'How long will it be (Hours)',
        'WEBINAR_FORM_INTEREST' => 'Why are you interested in making a webinar with us ?',
        'WEBINAR_FORM_EXPERIENCE' => 'What is your experience as a freelancer ?',
        'WEBINAR_FORM_BRIEF' => 'Brief Description',
        'WEBINAR_FORM_DETAIL' => 'Detailed Description',
        'WEBINAR_FORM_SUBMIT' => 'Submit'
	],
    'contact' => [
        // Contact Page
        'OFFICE_LOCATION' => 'Our Office Location',
        'CONTACT_NUMBER' => 'Contact Number',
        'EMAIL_ADDRESS' => 'Email Address',
        'CONTACT_FORM_TITLE' => 'Interested in discussing?',
        'CONTACT_FORM_NAME_LABEL' => 'Name',
        'CONTACT_FORM_NAME' => 'Enter Name',
        'CONTACT_FORM_EMAIL_LABEL' => 'Email',
        'CONTACT_FORM_EMAIL' => 'Enter Email',
        'CONTACT_FORM_SUBJECT_LABEL' => 'Subject',
        'CONTACT_FORM_SUBJECT' => 'Enter Subject',
        'CONTACT_FORM_PHONE_LABEL' => 'Phone',
        'CONTACT_FORM_PHONE' => 'Enter Phone',
        'CONTACT_FORM_MESSAGE_LABEL' => 'Message',
        'CONTACT_FORM_MESSAGE' => 'Enter Message',
        'CONTACT_FORM_SEND' => 'Send your message',
        'CONTACT_FORM_RESET' => 'Reset'
	],
    'about' => [
        // About Page
        'LABEL_TOP_TITLE' => 'Welcome to Freelance Incubator',
        'LABEL_TOP_SUBTITLE' => 'The best place to start your career as a freelancer',
        'LABEL_TOP_BODY' => 'FreelancersIncubator.com is part of licensed learning center Net It. Our company started his activity in 2014 with one training room which had a capacity for 12 people. Today we have over 150 computerized learning places. The confidence in vocational education continues to grow. This form of adult education has been proven in Western Europe and the United States.<br><br>Today Net It expands its portfolio of training modules, creating a Freelancers incubator.',
        'LABEL_MIDDLE_TITLE' => 'Our Misson',
        'LABEL_MIDDLE_BODY' => 'We are dedicated to offer a full range of training programs related to freelance activity and jobs. <br><br>
We are offering free webinars for the subscribers. Our mission is to build a freelancers community with experienced people who help other people to change their life, working with passion. New beginnings are somehow hard to handle. On our platform beginners will find the answers to all their questions.  
',
        'LABEL_BOTTOM_TITLE' => 'Freelancing from A to Z!',
        'LABEL_BOTTOM_SUBTITLE' => 'Start freelancing the right way',
        'LABEL_BOTTOM_BODY' => 'Organize, step by step, your freelance activity, starting from the basis. You are not alone anymore in your search of information and inspiration! On our platform you will find hacks and tips from those, who had successfully started and developed their freelance activity. Our free webinars are totally practice-oriented.<br><br>Find out here your mentor and a lot of support! Start now for free and <a href="http://freelancersincubator.com/login">create your account</a>.'
	],
    'home' => [
        // Home Box Section
        'HOME_BOX' => [
            'HOME_BOX_1_TITLE' => 'Be successful',
            'HOME_BOX_1_BODY' => 'To become a successful freelancer, you need a vision for your path to success. Build that vision with us.',
            'HOME_BOX_2_TITLE' => 'Free trainings',
            'HOME_BOX_2_BODY' => 'We are passionate freelancers, and our mission is to provide free and quality trainings on how to become successful.',
            'HOME_BOX_3_TITLE' => 'Learn from the best',
            'HOME_BOX_3_BODY' => 'We are building a community of newbies and top freelancers by putting them on the same team. Be a part of it!'
        ],
        // Upcoming Events Section
        'UPCOMING_EVENTS' => [
            'UPCOMING_EVENTS_TITLE' =>  'UPCOMING EVENTS',
            'UPCOMING_EVENTS_SUBTITLE' => 'Check out our upcoming events'
        ],
        // Register Section
        'REGISTER' => [
            'REGISTER_TITLE' =>  'Instant access to all free resources',
            'REGISTER_SUBTITLE' => 'Register Now!',
            'UNREGISTER_COURSE' => 'Remove Course!',
            'REGISTER_BODY' => 'We organize free webinars and provide tons of free video courses on How to become a successful freelancer. Don\'t waste your time and money to test different strategies to find clients, before check out our success stories and trainings.',
            'REGISTER_FORM_TITLE' => 'Register now',
            'REGISTER_FORM_SUBTITLE' => 'Create your free profile',
            'REGISTER_FORM_NAME' => 'Your Name',
            'REGISTER_FORM_EMAIL' => 'Your Email',
            'REGISTER_FORM_PHONE' => 'Your Phone',
            'REGISTER_FORM_PASSWORD' => 'Your Password',
            'REGISTER_FORM_CONFIRM' => 'Confirm Password',
            'REGISTER_FORM_T&C' => 'I agree with Terms & Conditions',
			'T_AND_C_LINK_FOOTER' => 'Terms & Conditions',
			'VERIFY_EMAIL' => '<b>Thank you for your registration! </b>We have sent an email with a confirmation link to your email address. Please allow 5-10 minutes for this message to arrive.',
            'REGISTER_FORM_REGISTER' => 'Register Now!',
            'SITE_KEY' => '6LcIY5kUAAAAABTaeMRwtkEfoMY73PNlKwXBFKuC'
        ],
        // Latest Videos Section
        'LATEST_VIDEOS' => [
            'LATEST_VIDEOS_TITLE' =>  'LATEST VIDEO COURSES',
            'LATEST_VIDEOS_SUBTITLE' => 'Check our latest video courses'
        ],
        // Testimonials Section
        'TESTIMONIALS' => [
            'TESTIMONIALS_TITLE' =>  'OUR TESTIMONIALS'
        ]
	],
	'app_create' => 'Create',
	'app_save' => 'Save',
	'app_edit' => 'Edit',
	'app_view' => 'View',
	'app_update' => 'Update',
	'app_list' => 'List',
	'app_no_entries_in_table' => 'No entries in table',
	'custom_controller_index' => 'Custom controller index.',
	'app_logout' => 'Logout',
	'app_add_new' => 'Add new',
	'app_are_you_sure' => 'Are you sure?',
	'app_back_to_list' => 'Back to list',
	'app_dashboard' => 'Dashboard',
	'app_delete' => 'Delete',
	'global_title' => 'Freelancers Incubator',
];
