-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2025 at 07:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `florifydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `Address` varchar(300) DEFAULT NULL,
  `order_amount` int(11) DEFAULT NULL,
  `payment_mode` varchar(20) DEFAULT NULL,
  `order_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `Address`, `order_amount`, `payment_mode`, `order_status`) VALUES
(6, 1, '66,47,80', 'bhoomi gupta, Delhi,India, bhoomigupta483501@gmail.com, 7756478883', 8635, 'Cash on delivery', 'Pending'),
(10, 1, '66,47,80', 'bhoomi gupta, Delhi,India, bhoomigupta483501@gmail.com, 7756478883', 8635, 'Cash on delivery', 'Pending'),
(11, 1, '66,47,80', 'bhoomi gupta, Delhi , india, bhoomigupta483501@gmail.com, 7756478883', 8635, 'Online', 'Pending'),
(12, 1, '66,47,80', 'bhoomi gupta, Delhi , india, bhoomigupta483501@gmail.com, 7756478883', 8635, 'Online', 'Pending'),
(13, 1, '66,47,80', 'bhoomi gupta, Delhi , india, bhoomigupta483501@gmail.com, 7756478883', 8635, 'Online', 'Pending'),
(14, 1, '66,47,80', 'bhoomi gupta, Delhi , india, bhoomigupta483501@gmail.com, 7756478883', 8635, 'Online', 'Pending'),
(17, 1, '66,47,80', 'bhoomi gupta, Delhi , india, bhoomigupta483501@gmail.com, 7756478883', 8635, 'Online', 'Pending'),
(18, 1, '66,47,80', 'bhoomi gupta, Delhi , india, bhoomigupta483501@gmail.com, 7756478883', 8635, 'Online', 'Pending'),
(19, 1, '66,47,80', 'bhoomi gupta, Delhi , india, bhoomigupta483501@gmail.com, 7756478883', 8635, 'Online', 'Pending'),
(20, 1, '66,47,80', 'bhoomi gupta, Delhi , india, bhoomigupta483501@gmail.com, 7756478883', 8635, 'Online', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(40) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_description` varchar(300) DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_type`) VALUES
(45, 'Bloom Burst', 3795, 'Bloom Burst is a joyful offering, created to light up her day like she lights up yours. Anna Karina roses bloom in full colour alongside golden helichrysum, soft yellow carnations, and bright yellow Asiatic lilies. Eucalyptus and yellow solidago add a gentle, airy flourish. Wrapped in peach-toned la', 'product/p-bloom-burst-408097-m (2).webp', 'birthday'),
(46, 'Blue Beauty Flower Box', 1695, 'A gorgeous flower box of exotic blue hydrangeas is perfect for expressing the most heartfelt emotions to your loved ones. They are soft, beautiful with fluttering petals, impeccably held in a white box for an added charm. Color may vary according to the season.', 'product/p-blue-beauty-flower-box-139964-m.webp', 'birthday'),
(47, 'Blooms From My Heart Floral Arrangement', 2645, 'Loved and remembered, your heartfelt wishes carried in a rustic and humble english garden basket. Crafted with love by the artisan - Disbud, white roses, blush pink roses, white carnation white, spray carnation, english fern, and kamini\r\n', 'product/p-blooms-from-my-heart-floral-arrangement-140864-m.webp', 'birthday'),
(48, 'Under Your Spell', 5095, 'As if touched by a quiet enchantment, this curation draws you in without a word. Pink oriental lilies, white disbuds, sweet avalanche roses, aqua pink roses, and pink spray carnations bloom alongside soft lisianthus, mini gerberas in pink and yellow, golden yellow roses, purple limonium, and eucalyp', 'product/p-under-your-spell-412296-m.webp', 'birthday'),
(49, 'Lilac Morning', 1445, 'As gentle as first light, Lilac Morning unfolds in soft, layered hues with sweet avalanche roses, deep purple roses, mauve spray chrysanthemum, purple daisies, pink santinis, a white spray carnation, and a wisp of purple eucalyptus. Wrapped in lavender with off-white tissue and tied with a purple ri', 'product/p-lilac-morning-268410-m.webp', 'birthday'),
(50, 'Countryside Memories', 4445, 'Countryside Memories is a tender gathering of blooms and textures, echoing soft meadows, quiet warmth, and the love shes nurtured through the years. Pink spray carnations, light yellow carnations, lisianthus, yellow helichrysum, and a touch of yellow gypso bloom gently alongside solidago, springeri,', 'product/p-countryside-memories-407524-m.webp', 'birthday'),
(51, 'Dreaming of Lilac', 6045, 'An emblem of charm and tenderness, this magnificent arrangement is sure to add a dreamy touch to the celebrations and express your unparalleled love with lilac roses, pink lisianthus, light mauve chrysanthemum and lavender eucalyptus.', 'product/p-dreaming-of-lilac-187574-m.webp', 'birthday'),
(52, 'Strawberry Matcha', 2545, 'A fusion of soft pink hues and fresh green tones, this creation mirrors the indulgence of strawberry matcha. Sweet avalanche, Hermosa, and aqua pink roses blend like crushed berries, while green button chrysanthemums add a hint of earthy freshness. Pink mini gerberas, carnations, and pink-sprayed gy', 'product/p-strawberry-matcha-401598-m.webp', 'birthday'),
(53, 'Buttercup Blooms', 2995, 'The light at the end of the tunnel and the silver lining too. Capturing her true essence, heres a bespoke curation of white button chrysanthemums, Asiatic yellow lilies, yellow mini gerberas, yellow roses, sweet avalanche roses and pink spray carnations, lovingly wrapped to exude charm and vibrance.', 'product/p-buttercup-blooms-281126-m.webp', 'birthday'),
(54, 'Amethyst Dream', 2445, 'Like a dream cast in amethyst tones, this arrangement brings together plush purple roses, delicate lisianthus, dried scabiosa, soft daisy blooms, eucalyptus, and wisps of springery. Set in a lilac coupe vase, it is an expression of calm beauty, where every bloom feels carefully chosen from a world j', 'product/p-amethyst-dream-240884-m.webp', 'birthday'),
(55, 'Monochrome Muse', 3795, 'An ode to the art of contrast, this monochrome muse draws its allure from sculptural whites set against deep black. Lush white roses, ruffled carnations, santini with dark centres, delicate spray chrysanthemums, pristine orchids, eucalyptus, and airy springery come together in black frosted wrap, se', 'product/p-monochrome-muse-416856-m.webp', 'birthday'),
(56, 'Birthday Poetry', 1445, 'Every birthday deserves a little moment of beauty to unfold, and this bouquet is made to be just that. Ruffled pink spray carnations unfold in tender hues, while sprigs of fresh eucalyptus foliage offer a breath of serenity. Pastel green and blush pink wraps gather everything in a tender embrace, ti', 'product/p-birthday-poetry-412743-m.webp', 'birthday'),
(57, 'Eternal Sunshine', 1945, 'A radiant embrace of golden hues, this creation glows with sunflowers, yellow carnations, mini gerberas, and solidago, warmed by the soft touch of white spray carnations. Craspedia adds a playful burst of sunshine, while eucalyptus brings a refreshing balance. Tied with a white lace ribbon and place', 'product/p-eternal-sunshine-403024-m.webp', 'birthday'),
(58, 'A Blooming Sunrise', 2195, 'A Blooming Sunrise captures the warmth of first light in petals. This radiant curation gathers a flame-orange asiatic lily, golden solidago, violet statice, hot pink roses, buttery yellow carnations, painterly purple and white shaded carnations, blush pink mini gerberas, soft pink spray carnations, ', 'product/p-a-blooming-sunrise-412294-m.webp', 'birthday'),
(59, 'A Vibrant Purity', 6895, 'There is a beauty that glows without effort, where colour uplifts and light lingers softly. Vibrant Purity captures the brilliance of sunlit yellow roses, softened by pink alstroemeria, blush spray carnations, white statice, yellow gypso, and eucalyptus. Housed in a classic black chrome box, it is c', 'product/p-a-vibrant-purity-182378-m.webp', 'birthday'),
(61, 'The Dream Maker', 1795, 'A bouquet spun from the softness of dreams and quiet wonder. Blush-toned sweet avalanche roses bloom beside mauve spray chrysanthemums, ruffled cape mix stems, and misty purple limonium. Wisps of eucalyptus and dried mustard bring in a raw and grounded texture, all wrapped in warm brown paper and ti', 'product/p-the-dream-maker-414490-m.webp', 'birthday'),
(65, 'With Every Heartbeat', 26995, 'Push the boundaries of love with blooming finesse so fine, it sweeps your sweetheart off their feet. This larger than life size ensemble is more than what meets the eye. The gold glitter heart box , acrylic tag and glittered ribbons usher in tenderness and more than 200 sweet avalanche roses that sy', 'product/p-with-every-heartbeat-273268-m.webp', 'anniversary'),
(66, 'The Royal Wish', 2995, 'A royal handtied of exotic red roses and red gypso in classic red and white striped ribbon to make your significant other smile ear to ear. Let the red take over and sweep them off their feet', 'product/p-the-royal-wish-153254-m.jpg', 'anniversary'),
(67, 'Blooming Romance', 2295, 'Romance blooms in this fresh-as-ever arrangement of charming red roses, blush pink roses, aqua pink roses & pink spray carnations held in a big rose gold vase for a token of love that is as beautiful as the delicate desire of budding romance.', 'product/p-blooming-romance-125158-m.jpg', 'anniversary'),
(68, 'Hues of Opulence', 4795, 'That tranquil feeling of gazing at the clear blue sky, captured in a splendid assortment of hydrangea, roses and carnations. Its blend of blue hues and neutral tones makes it a quintessential gift that exudes serenity.\r\n', 'product/p-hues-of-opulence-184262-m.webp', ''),
(69, 'Heavens Secret', 3945, 'Get all wrapped up in the glory of farm-fresh stunners and pure enchantment. The handcrafted assortment of white disbuds, white button chrysanthemums, sweet avalanche roses, pink alstroemeria and pink lisianthus, beautifully envelops blissful feelings for your loved ones. Call it a carrier of tender', 'product/p-heaven-s-secret-284956-m.webp', 'anniversary'),
(70, 'Blushing in Love', 14045, 'On the day of love, make it rain romance, affection and lots of luxe blooms - sweet avalanche roses, aqua pink roses, pink spray roses, new pink and gold glitter ribbon, pearl strings and a gold glitter box. Now this is what you call unbounded love.', 'product/p-blushing-in-love-273300-m.webp', 'anniversary'),
(71, 'Timeless Treasure', 5245, 'Their larger-than-life perspective makes life so much more worthwhile. Say, thank you to your partner with an even grandeur disposition - Peach roses, white roses, white spray carnations, dry palm leaves, a happy anniversary balloon set atop a gold stand.', 'product/p-timeless-treasure-240793-m.webp', 'anniversary'),
(72, 'Kiss From The Sun', 2195, 'Follow the rays and let them welcome positivity with this ebullient assortment featuring a white and gold bow planter, sunflowers, peach roses, gypso, eucalyptus and an Interflora tag. It romances natures finest blooms, elevating your occasions with a touch of dazzle.\r\n', 'product/p-kiss-from-the-sun-273322-m.webp', 'anniversary'),
(73, 'A Lot Like Love Hamper', 5895, 'A lavish Anniversary wish - granted.Surprise your loved one with this extravagant birthday hamper created to leave an everlasting impression. Arranged with stunning blooms of lisianthus & roses, the hamper comes with a delicious cake & a anniversary banner.\r\n', 'product/p-a-lot-like-love-hamper-149787-m.webp', 'anniversary'),
(74, 'Blushing Dreams', 4145, ' A pink haven crafted for your special one thats reminiscent of tender passion, sweet love and unconditional care. Carefully packed within a dusty rose velvet hexagon box, the moonlight garden luxury candle and reed diffuser offer unbounded serenity. Florals like pink santini, sweet avalanche roses,', 'product/p-blushing-dreams-281435-m.webp', 'anniversary'),
(75, 'Sweet Grandeur Love', 7445, 'A magical larger than life hand-tied crafted with love. Tell them how much you adore their presence with this special arrangement of peach roses, sweet avalanche roses, mauve chrysanthemum, pink carnations, pink gypso in an astonishing gold metal stand.', 'product/p-sweet-grandeur-love-178140-m.webp', 'anniversary'),
(76, 'Romeo & Juliet', 5295, 'A poetic medley of loves two favourite hues, red and pink, this assortment is exquisitely handcrafted and adorned with pearls in a pink glass vase, to augment the expression of love. While the traditional reds reflect true love, the pinks infuse a wave of happiness and admiration. Making it the perf', 'product/p-romeo-juliet-273297-m.jpg', 'anniversary'),
(77, ' Dreaming of Red', 1795, 'Red roses wrapped with love. A tender disposition of warmth and care, its a romantic gesture that reveals all that which lays in the bottom of your heart. And makes your one and only feel like the luckiest in the world.', 'product/p-dreaming-of-red-201464-m.jpg', 'anniversary'),
(78, 'Pretty in Pastel', 1995, 'Colour them with joy and vibrance - White disbuds, sweet avalanche roses, mauve spray chrysanthemum and eucalyptus. The assortment carries your best wishes and care on your loved ones special day. And reminds them of all the beautiful moments that make your bond extraordinary.', 'product/p-pretty-in-pastel-202677-m.webp', 'anniversary'),
(79, 'Key to my Heart', 3845, 'A heart-shaped basket adorned with a key motif, its locked away with sweet whispers of forever love. And a resounding emotion that fills your heart with joy - Red roses, sweet avalanche roses, spray roses, lisianthus and pink gypso.\r\n', 'product/p-key-to-my-heart-201225-m.jpg', 'anniversary'),
(80, ' Rhapsody of Love', 2995, 'A bouquet that holds myriad shades of love and reflects a paradise created to enchant romantic lovebirds - Sweet avalanche roses and aqua pink roses. A medley so soulful, it seems straight out of a fairytale.', 'product/p-rhapsody-of-love-201243-m.webp', 'anniversary'),
(81, 'Where Love Blooms', 1995, 'Hues of sophistication, a petal-shaped design and an over-the-top floral love language that compels one to stop and stare. It all comes together, artfully and meticulously, in this bespoke ensemble that ignites feelings of passion. The monochromatic black and white tissue petals give an illusion of ', 'product/p-where-love-blooms-273286-m.jpg', 'anniversary'),
(82, 'Unforgettable 50 Pink Roses Hand Tied', 4095, 'Say it all, 50 times over. Our stunning bouquet of 50 pink roses, sourced from the best growers of India are here to pass on your message, in blush pink. Set to turn cheeks pink with blush, the arrangement is arranged in military precision in our signature black box.', 'product/p-unforgettable-50-pink-roses-hand-tied-37905-m.webp', 'anniversary'),
(83, 'A Rosy Silhouette', 4895, 'A soulful arrangement of aqua pink roses, sweet avalanche roses and gold butterfly tags that whispers unparalleled fondness for the purest bonds. And reiterates your belief that theyre truly one in a million.', 'product/p-a-rosy-silhouette-206790-m.webp', 'anniversary'),
(84, '100 Days of Love', 6000, 'A bouquet of 100 magical red roses that wraps your love, affection and care to express what you truly feel within. Pamper your love with this exquisite assortment and let it be the reason for you two to fall in love all over again.', 'product/p-100-days-of-love-201246-m.jpg', 'anniversary'),
(85, '100 Days of Love', 6000, 'A bouquet of 100 magical red roses that wraps your love, affection and care to express what you truly feel within. Pamper your love with this exquisite assortment and let it be the reason for you two to fall in love all over again.', 'product/p-100-days-of-love-201246-m.jpg', 'anniversary'),
(98, 'Blooming Joy Gift Bouquet', 695, 'Delight your loved ones with a bouquet that speaks the language of happiness. This vibrant bouquet brings together pristine white gerberas, rich cerise pink roses, and charming purple daisies, creating a refreshing burst of colours. Elegantly wrapped in a soft beige frosted sheet and hand-tied with ', 'p-blooming-joy-gift-bouquet-406968-m.webp', 'birthday'),
(99, 'Divine Love Orchids Bouquet', 1099, 'A graceful ensemble of delicate pink roses, this bouquet is a symbol of admiration and gentle affection. Wrapped in luxurious pink paper with gold accents, this arrangement exudes sophistication and charm. The soft blush tones of the roses are beautifully highlighted by fresh green foliage, making t', 'shopping.webp', 'birthday');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `emailed` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `phoneno` bigint(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `emailed`, `password`, `phoneno`, `role`) VALUES
(1, 'bhoomi gupta', 'bhoomi@gmail.com', 'bhoomi999', 8982877356, 'client'),
(4, 'Rohit Kumar ', 'rohit@gmail.com', 'bhoomi999', 9176645544, 'client'),
(6, 'palak gupta', 'palak@gmail.com', 'palak1', 917664890, 'client'),
(8, 'asha kumari', 'asha@gmail.com', 'asha', 8889110567, 'client'),
(9, 'shruti sharma', 'shruti@gmail.com', 'shruti0', 9973543233, 'client'),
(11, 'ashutosh', 'ashu@gmail.com', 'ashu22', 70986655534, 'client'),
(12, 'Sapna Jain', 'sapna_09@gmail.com', 'sapna55', 8765556600, 'client'),
(13, 'Ashu Sharma', 'ashu30@gmail.com', 'ashu123', 8982877356, 'client'),
(14, 'harish', 'harish@gmail.com', '123', 5689457, 'client'),
(17, 'sanskriti jain', 'sanskriti1@gmail.com', '1234', 987564231, 'client'),
(18, 'Tashu Soni', 'tashu@gmail.com', '5678', 9191546584, 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `emailed` (`emailed`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
