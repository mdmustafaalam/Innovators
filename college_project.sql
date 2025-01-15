
CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_title` text NOT NULL,
  `blog_content` text NOT NULL,
  `blog_image` text NOT NULL,
  `publish_date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `blog_content`, `blog_image`, `publish_date`, `status`) VALUES
(11, 'Durga Puja', 'Durga Puja, also known as Durgotsava or Sharodotsav, is an annual Hindu festival originating in the Indian subcontinent which reveres and pays homage to the Hindu goddess Durga, and is also celebrated because of Durga\'s victory over Mahishasura.', 'blog_image/Durga Puja.jpg', '2023-10-20', 'On'),
(12, 'Happy Diwali', 'Diwali is the Hindu festival of lights with its variations also celebrated in other Indian religions. It symbolises the spiritual \"victory of light over darkness, good over evil, and knowledge over ignorance\".', 'blog_image/Diwali-wishes-images.jpg', '2023-11-05', 'On'),
(13, 'Winter', 'Winters in India are an enchanting season with a myriad of snow-capped mountain peaks, cool and sunny plains, scenic beaches, warm deserts and lively festivals. On an average, winters in India begin from mid-November and go on till late January, but with stark local variations.', 'blog_image/winter.jpg', '2023-11-05', 'On'),
(14, 'Cricket World Cup', 'The Cricket World Cup, officially known as ICC Men\'s Cricket World Cup, or simply called the World Cup is the international championship of One Day International cricket.', 'blog_image/india-2023-logo.png', '2023-11-05', 'On'),
(15, 'Importance of Education', 'Education is the transmission of knowledge, skills, and character traits. Its precise definition is disputed and there are disagreements about what the aims of education are and to what extent education is different from indoctrination by fostering critical thinking.', 'blog_image/importance-of-education.jpg', '2023-11-05', 'On');

-- --------------------------------------------------------


CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `phone_number` text NOT NULL,
  `email` text NOT NULL,
  `feedback_title` text NOT NULL,
  `feedback_details` text NOT NULL,
  `register_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `phone_number`, `email`, `feedback_title`, `feedback_details`, `register_date`) VALUES
(1, 'Rahul', '8535840335', 'example25@gmail.com', 'Website feedback forms are interactive online surveys that are integrated into websites to capture insights from website visitors or customers to identify areas of improvement.', 'Good Job', '2023-10-16'),
(2, 'Roman', '1234567890', 'abc@gmail.com', 'A website feedback form is a powerful survey tool for businesses that operate online. That\'s because the user feedback not only gives insights into how your product(s) is perceived.', 'this is good ', '2023-10-17'),
(4, 'Nayan', '00000000', 'admin@gmail.com', 'Website feedback forms are interactive online surveys that are integrated into websites to capture insights from website visitors or customers to identify areas of improvement.', 'av', '2023-10-29');
