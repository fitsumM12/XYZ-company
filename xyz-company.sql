-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 03:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xyz-company`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(500) NOT NULL,
  `cat_description` varchar(1000) NOT NULL,
  `cat_author` int(11) NOT NULL,
  `cat_status` varchar(500) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_description`, `cat_author`, `cat_status`) VALUES
(5, 'Web Development', '', 1, 'approved'),
(7, 'Android Development', '', 1, 'approved'),
(8, 'Data Analysis', '', 1, 'approved'),
(11, 'Database Administration', '', 1, 'approved'),
(13, 'Artificial Intelligence', '', 1, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` int(11) NOT NULL,
  `c_uname` varchar(500) NOT NULL,
  `c_uemail` varchar(500) NOT NULL,
  `c_message` varchar(1000) NOT NULL,
  `c_status` varchar(500) NOT NULL DEFAULT 'pending',
  `created` date NOT NULL DEFAULT current_timestamp(),
  `updated` date NOT NULL DEFAULT current_timestamp(),
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `c_uname`, `c_uemail`, `c_message`, `c_status`, `created`, `updated`, `p_id`) VALUES
(9, '', '', '', 'pending', '2022-11-19', '2022-11-19', 11);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `design` text NOT NULL,
  `support` text NOT NULL,
  `place` varchar(100) NOT NULL,
  `facebook` varchar(150) NOT NULL,
  `telegram` varchar(150) NOT NULL,
  `instagram` varchar(150) NOT NULL,
  `twitter` varchar(150) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `contact2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `logo`, `description`, `design`, `support`, `place`, `facebook`, `telegram`, `instagram`, `twitter`, `linkedin`, `email`, `contact`, `contact2`) VALUES
(1, '1628298668_logo.png', '<blockquote>\r\n<p style=\"text-align:justify\">We build extreme performance, scalable, compliant &amp; secured mobile &amp; web-based applications &amp; systems with a focus on platform &amp; solutions. Our experience includes the design, development, implementation, maintenance and support of mobile &amp; web applications for government, banks for local &amp; international clients.</p>\r\n</blockquote>\r\n', '<blockquote>\r\n<p style=\"text-align:justify\">Designing and developing websites, mobile applications and business software solutions which are interactive and responsive in all devices and platforms.</p>\r\n</blockquote>\r\n', '<blockquote>\r\n<p style=\"text-align:justify\">Get post development support and maintenance of sophisticated and secured softwares, websites and mobile Apps for a wide range of national and international organizations.</p>\r\n</blockquote>\r\n', 'Bole, Addis Ababa', '', '6666666666666666666666666', 'www.instagram.com', '', 'www.instagram.com', 'contact@zementech.com', '+917205309431', '+917205309431');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(11) NOT NULL,
  `fb_uname` varchar(500) NOT NULL,
  `fb_email` varchar(500) NOT NULL,
  `fb_subject` varchar(500) NOT NULL,
  `fb_message` varchar(1000) NOT NULL,
  `fb_status` varchar(500) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(500) NOT NULL,
  `p_description` varchar(10000) NOT NULL,
  `p_photo` varchar(500) NOT NULL,
  `p_date` date NOT NULL DEFAULT current_timestamp(),
  `p_cat` int(11) NOT NULL,
  `status` varchar(500) NOT NULL DEFAULT 'pending',
  `p_author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`p_id`, `p_title`, `p_description`, `p_photo`, `p_date`, `p_cat`, `status`, `p_author`) VALUES
(9, 'Artificial Intelligence', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\">When I tell people artificial intelligence made me a better writer, they almost always give me a weird look. &ldquo;How could AI help you?&rdquo; they ask. They assume AI technology is still far off, not with us today. And even if AI tech is decent now, there&rsquo;s no way it could help someone who writes for a living, right? Nope, wrong. Over the past two years, I&rsquo;ve adopted AI software at every opportunity and can report that the productivity gain is absurd. AI has helped me cut down on menial work and spend more time on creativity, realizing a long-prophesied promise about the technology. It&rsquo;s is also teaching me to write tighter and with more precision, and it&rsquo;s shockingly good in this regard. Some &ldquo;experts&rdquo; say AI will replace writers. That&rsquo;s far off. Instead, it will make us better.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\">As an independent writer, my copy must be flawless. My writing can&rsquo;t have errors, or my readers will lose trust (I pray to god there are none in this story). It also can&rsquo;t meander, or readers will tune out. To address this, I use Grammarly, an AI software tool that catches style errors and teaches me how to correct them. Grammarly&rsquo;s helped me fix several embarrassing tendencies that once made my writing sloppy. It&rsquo;s helped me spot repeated and missing words, cut down on wordiness (&ldquo;several&rdquo; above used to be &ldquo;a number of&rdquo;), and, crucially, it&rsquo;s helped me write in active voice vs. passive voice.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\">I read up on active vs. passive voice maybe a thousand times earlier in my career, but I never quite grasped the difference. I&rsquo;m not quite sure why. But Grammarly helped me figure it out. The software&rsquo;s AI picks out when you use the passive voice and highlights the mistake to show you where you went wrong. Then you can correct it. By repeating this countless times, I finally started to understand what active voice is. Now, I write with it instinctually. </span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\">Timo Mertens, Grammarly&rsquo;s head of machine learning, told me that the company&rsquo;s AI technology treats our writing as if it&rsquo;s a translation. But instead of translating English to German, for instance, Grammarly translates bad English (read: mine) to correct English and suggests changes that bring the copy in line with rules. Grammarly does this with the help of several linguists, and a vast amount of literature it loads into its systems to train everything from deep neural nets &mdash; some of the most sophisticated AI technology &mdash; to simple, rule-based programs. As I write, Grammarly now hums along in my head, and I can anticipate its suggestions before they pop up. Or at least some of them. Even for someone who writes professionally, this is invaluable. I can&rsquo;t imagine living without it. Beyond improving writing already on the page, AI is also helping me craft better stories by giving me more of a most precious commodity: time. Recent advances in AI have been instrumental in cutting down the time I spend on transcription, something anyone who writes for a living will tell you is a huge burden. As a reporter, I spend my days interviewing people and use what they tell me to write stories. Journalists initially preserved these conversations in notepads, then we moved to tape recorders, and we now use smartphones to record. Without AI, we&rsquo;d still have to listen to the recordings and transcribe them by hand. This takes forever, and it sucks. But everything changed with Otter.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\">Otter.ai is an app that records conversations and live transcribes them using AI technology the company calls &ldquo;diarization.&rdquo; Sam Liang, a former Google tech lead and Stanford Ph.D., an Otter&rsquo;s founder, told me Otter trains its AI on tens of thousands of hours of audio conversations, using that data to help it convert spoken conversation to words on the page. Otter is now so sophisticated it can tell the difference between speaker voices and even pick out when someone is asking a question vs. sharing a statement. What Otter does is similar to how I believe AI will shift work across all professions. In most work environments, we spend almost all our time on &ldquo;execution work,&rdquo; i.e., just getting things done once we have the idea, and little time on &ldquo;idea work,&rdquo; i.e., the stuff that creates value. (I write about this at length in Always Day One). AI is great at getting stuff done, so we humans can spend more time focusing on ideas. For a reporter like myself, using Otter means spending less time arduously transcribing a conversation with a source &mdash; the AI takes care of that &mdash; and more time on the &ldquo;idea,&rdquo; i.e. thinking about the story and making more calls to see if I can find new information. This leaves me more time to write, helping me avoid the scramble that once ensued after I spent three hours transcribing a 45-minute conversation. I&rsquo;m not the only journalist who feels this way.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\">&ldquo;If we look at our database, we see tons of email addresses from The New York Times, Wall Street Journal, ABC, NBC,&rdquo; Liang told me. Otter, Liang said, has transcribed more than 150 million meetings, not all from writers and reporters, but it uses that data to get better. And it helps us improve in the process. When we speak about AI today, the conversation is almost always fear-based or filled with skepticism. But AI is with us already. It&rsquo;s powerful. And it can help. Rather than take our jobs, it can (and will) make us better. I&rsquo;ve seen this technology take hold in my industry, and it&rsquo;s inevitably spreading through yours as well. If you&rsquo;re wondering whether to ignore, fight, or embrace this moment, I&rsquo;d suggest going with the latter.</span></p>\r\n', '1628230838_1628146571_photo_2021-08-05_10-47-13.jpg', '2021-08-05', 5, 'approved', 1),
(11, 'Winning strategies behind top rated fitness apps in 2020', '<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">The pandemic and the simultaneous rise in countries going on a lockdown gave rise to two things in particular; the increased focus on both mental and physical health. Confined in a house, with the same set of people can have different challenges for different people. The lockdown, automatically saw social media and surroundings abuzz with why one must focus even more on their mental and physical health in these unprecedented times. Naturally, all resources for mental and physical well-being quickly transferred online.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">It&#39;s no surprise that dealing with a pandemic is extremely taxing on one&rsquo;s mental health. To start with, it&rsquo;s dealing with something nobody has dealt with before. A pandemic can result in anxiety and can leave a person overwhelmed because of the uncertainty of the present and the future.&nbsp; Stress because of how difficult the time is can affect mental health. Being stuck at home also in turn results in mental health even more so due to lack of physical activity. While this article primarily focuses on fitness apps, and what makes them successful, please refer to CDC on tips for coping with stress and how to focus on your mental health.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">Unsurprisingly, as the world moved indoors, the demand for fitness apps drastically increased. But what differentiates one fitness app from another, and what is it that determines the success of an app? If you look at the top-rated fitness apps you will find four secrets behind their massive success, tremendous user base, and great financial success. Be it, Nike, Kayla, Fitbit,&nbsp; Blogilates, Sworkit, etc all have these four secrets in common and we are here to spill them for you.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">Secret 1: Community Building </span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">They say a man is a social animal, thereby making it easier to understand why humans behave differently along v/s how they behave in a team or a community. The first secret to success is to not only just build an app, but also to build a community with it. A community gives an individual a sense of belonging, which is a huge requirement during these times because of social isolation.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">This sense of belonging gives people the push required to stick to the app and to stick to their workouts, making workouts more regular, efficient, progressive, and less overwhelming. Returning and a committed user base ensures activity and an active community ensures an increase in the user base as well.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">Secret 2: Competition and Connected Fitness</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">Healthy competition has proved to be a huge motivator for people. Apps that have the concept of a leader board focuses on overall fitness and ranks push people to further excel and go the extra mile. According to research by US National Library of Medicine, competition can actually improve attention and learning. The same research also concluded that competition increased attention, improved memory and improved efforts put it in by a person.</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">Clearly concluding that competition increases the motivation of the users thereby impacting their physical efforts. Connected fitness also allows users to see how their peers in the community are performing thereby giving them the boost to up their game. Additionally, connecting social media to fitness apps&rsquo; leader boards can also enable users to gleefully &lsquo;show-off&rsquo; their workout. All in all, making it very important for fitness apps to focus on some kind of competition, and connecting fitness to wearables.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">Secret 3: Great User Experience</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">The secret to any great app really is to make sure your app provides a great user experience. Great user experience does not just ensure that your users stay committed to the app, but also facilitates word of mouth, thereby getting more users on the app. Great user experience can include but not limit to the security of the app, personalized UX, a good quality UI, and most importantly an app free from errors and bugs.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">These together add to the overall user experience of a consumer and is one of the biggest secrets to an app&rsquo;s success. Enabling a user to customize their app interface, their workout plans, and personalizing their entire fitness experience is a big plus point for any fitness app. These things ensure that a user stays as connected to the app as possible, thereby eliminating the absence of a human trainer.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">Secret 4: Optimum use of technology (alerts, push notifications and reminders) </span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">The increase in wearables and with our smartphones being able to track our activity is an advantage fitness apps must tap on. By integrating the app with a user&rsquo;s smartphone, wearable such as Apple Watch, Fitbit, etc it can detect motion and in turn know when we are walking, running, or working out. The app can then notify us if we want to record that workout.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">These no-efforts recordings of workouts and reminders in the future based on previous activities is a motivation factor that can enable a user to push their body. This integration can also help in a fitness app knowing a user hasn&rsquo;t worked out thereby sending the appropriate push notifications and reminders. Since this becomes personalized to every single user, it makes the user feel belonged and more motivated.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">How can TechAhead help?</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">TechAhead, renowned as one of the top mobile app development companies, has over 10 years of experience serving fortune 500 clients to high growth enterprises. The company has proven expertise in the Internet of Things (IoT), and other emerging technologies such as AR-VR and their integration with mobile apps.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">At TechAhead, we have extensive experience in creating a wide range of health, fitness, and daily workout apps for clients from across the world. Our team is adept at iOS app development and Android app development. Additionally, we have AR specialists who can help to take your app to the next level.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">With everyone focusing on fitness, one way or another it is no surprise that companies are also expanding and releasing fitness apps. However, it is imperative to make sure that the app is sustainable with or without a pandemic. Now that we have spilled our secrets, you know the 4 most important things to focus on, to make sure your app is a roaring success.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"background-color:white\"><span style=\"color:black\">Author: TechAhead Team</span></span></span></span></p>\r\n', '1628230340_1628152825_winning-strategies-behind-top-rated-fitness-apps.png', '2021-08-05', 5, 'unapproved', 1),
(13, 'me', '<p>fitsum memsfin</p>\r\n', '1668838003_randomised-random-28065165-1024-819.jpg', '2022-11-19', 13, 'approved', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(500) NOT NULL,
  `s_description` varchar(2000) NOT NULL,
  `s_image` varchar(500) DEFAULT NULL,
  `s_author` varchar(500) NOT NULL,
  `s_status` varchar(256) NOT NULL DEFAULT 'pending',
  `s_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `s_title`, `s_description`, `s_image`, `s_author`, `s_status`, `s_date`) VALUES
(13, 'LIVE CHAT            ', '<blockquote>\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Live chat on your website will give a vote of confidence to you customer during their shopping experience, also help you to increase your conversion ratio and make you look like creates a brand</span></p>\r\n</blockquote>\r\n', 'icon-shield', '1', 'approved', '2021-08-05'),
(14, 'RESPONSIVE DESIGN       ', '<blockquote>\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">Responsive Website is must nowadays as 90% of internet traffic uses mobile phone its recommend to have a responsive website design b/c it respond to the user&#39;s request irrespective of device they use. </span></p>\r\n</blockquote>\r\n', 'icon-shield', '1', 'approved', '2021-08-05'),
(15, 'PAYMENT GATEWAY INTEGRATION        ', '<blockquote>\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">We will also integrate a payment gateway on your website(eCommerce and etc.) for easy online transfer from any customer account to your account for any sales or purchase made on the business website.</span></p>\r\n</blockquote>\r\n', 'icon-basket', '1', 'approved', '2021-08-05'),
(16, 'LIGHT SPEED    ', '<blockquote>\r\n<p><span style=\"font-family:Georgia,serif\">We also always make sure when we develop any website it should responsive and lite speed as it is a very important factor when it comes to SEO, It will help you to rank higher /top on search engines.</span></p>\r\n</blockquote>\r\n', 'icon-target', '1', 'approved', '2021-08-05'),
(17, 'SOCIAL MEDIA INTEGRATION       ', '<blockquote>\r\n<p>You may find new customers anywhere so it&#39;s very important to link all your social media channels on the website that will not only get you a follow on social media channel also help you in SEO.</p>\r\n</blockquote>\r\n', 'icon-hotairballoon', '1', 'approved', '2021-08-05'),
(18, '24/7 CUSTOMER SUPPORT     ', '<blockquote>\r\n<p style=\"text-align:justify\"><span style=\"font-family:Georgia,serif\">As a website development company, we make sure to provide 24x7 phone support for any emergency for any question and help with products e-mail us at support@zementech.com</span></p>\r\n</blockquote>\r\n', 'icon-shield', '1', 'approved', '2021-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sl_id` int(11) NOT NULL,
  `sl_title` varchar(500) NOT NULL,
  `sl_subtitle` varchar(500) NOT NULL,
  `sl_image` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `sl_status` varchar(500) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sl_id`, `sl_title`, `sl_subtitle`, `sl_image`, `link`, `sl_status`) VALUES
(4, 'Get Professional Website', 'Secured, Interactive and Responsive Website', '1628180638_slider_3.jpg', '12', 'approved'),
(5, 'We build scalable mobile, web & cross-platform applications', 'Design, Development and Strategy', '1628180681_slider_1.jpg', '', 'unapproved'),
(6, 'GET iOS and Android MOBILE Apps', 'Build, Implement and Support', '1628180698_slider_2.jpg', '', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `tm_id` int(11) NOT NULL,
  `tm_name` varchar(500) NOT NULL,
  `tm_email` varchar(500) NOT NULL,
  `tm_password` varchar(500) NOT NULL,
  `tm_contact` varchar(500) NOT NULL,
  `tm_role` varchar(500) NOT NULL DEFAULT 'no specified',
  `tm_status` varchar(500) NOT NULL DEFAULT 'pending',
  `tm_photo` varchar(256) NOT NULL,
  `tm_description` varchar(1000) NOT NULL,
  `tm_profession` varchar(500) NOT NULL,
  `tm_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`tm_id`, `tm_name`, `tm_email`, `tm_password`, `tm_contact`, `tm_role`, `tm_status`, `tm_photo`, `tm_description`, `tm_profession`, `tm_code`) VALUES
(1, 'fitsum mesfin', 'fitsummesfin12@gmail.com ', '$2y$12$HnM/nMIAxRWVvN//8YDqY.4PnCrxFezEhBA2xeLI/HsUxMGPfzMLa', '+917205309431', 'admin', 'approved', '1628333085_profile_pictureteam1.jpg', '<p style=\"text-align:justify\"><span style=\"font-size:12px\"><span style=\"font-family:Times New Roman,Times,serif\">Fitsum is a hard-working, prolific, full stack web developer with a flair for creating elegant solutions in the least amount of time. Developed an e-learning webapp, customer web portal and more.&nbsp; Consistently receive high user experience scores for all his excellent web development projects. Passionate about software architecture, cloud computing and building world class web applications.</span></span></p>\r\n', 'Web Developer', 0),
(10, 'selemon', 'selemonmatiya@gmail.com', '$2y$12$DHUvGW/atOsRjCAzI9VKzOKssMxz6u8jdqq02/887C1g4f1LauFDW', '', 'author', 'pending', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team_member_address`
--

CREATE TABLE `team_member_address` (
  `id` int(11) NOT NULL,
  `tm_id` int(11) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `twitter` varchar(500) NOT NULL,
  `linkedin` varchar(500) NOT NULL,
  `telegram` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_member_address`
--

INSERT INTO `team_member_address` (`id`, `tm_id`, `facebook`, `twitter`, `linkedin`, `telegram`) VALUES
(2, 1, 'https://www.facebook.com/', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjtqpSSspnyAhVSCM0KHWldCcgQFnoECAMQAw&url=https%3A%2F%2Ftwitter.com%2Ftwitter%3Flang%3Den-gb&usg=AOvVaw0hhrxmiUxQTl3TnOWD4_M1', 'https://www.facebook.com/', 'https://www.facebook.com/'),
(16, 10, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `constraint1464` (`cat_author`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `Constraint257` (`p_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `Constraint256` (`p_author`),
  ADD KEY `constraint75647535` (`p_cat`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`tm_id`),
  ADD UNIQUE KEY `UC_email` (`tm_email`);

--
-- Indexes for table `team_member_address`
--
ALTER TABLE `team_member_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Constraint255` (`tm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `tm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `team_member_address`
--
ALTER TABLE `team_member_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `constraint1464` FOREIGN KEY (`cat_author`) REFERENCES `team_members` (`tm_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Constraint257` FOREIGN KEY (`p_id`) REFERENCES `posts` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `Constraint256` FOREIGN KEY (`p_author`) REFERENCES `team_members` (`tm_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `constraint75647535` FOREIGN KEY (`p_cat`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team_member_address`
--
ALTER TABLE `team_member_address`
  ADD CONSTRAINT `Constraint255` FOREIGN KEY (`tm_id`) REFERENCES `team_members` (`tm_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
