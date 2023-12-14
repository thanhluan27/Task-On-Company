-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 14, 2023 lúc 10:03 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel_content_app`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `post_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_at` datetime NOT NULL,
  `feature` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`post_id`, `title`, `slug`, `status`, `image`, `excerpt`, `content`, `posted_at`, `feature`, `created_at`, `updated_at`) VALUES
(6, 'Vùng núi cao có thể rét dưới 3 độ C', 'https://vnexpress.net/vung-nui-cao-co-the-ret-duoi-3-do-c-4688720.html', 'đã đăng', '20231214090853.png', 'Không khí lạnh mạnh tràn về gần sáng 16/12 kéo nhiệt độ Hà Nội xuống thấp nhất 11 độ, vùng núi cao 3 độ C, có thể xuất hiện băng giá.', '4\r\nThời sựThứ năm, 14/12/2023, 15:20 (GMT+7)\r\nVùng núi cao có thể rét dưới 3 độ C\r\nKhông khí lạnh mạnh tràn về gần sáng 16/12 kéo nhiệt độ Hà Nội xuống thấp nhất 11 độ, vùng núi cao 3 độ C, có thể xuất hiện băng giá.\r\n\r\nTrung tâm Dự báo Khí tượng Thủy văn quốc gia cho biết ngày 16/12, miền Bắc có thể mưa rào, cục bộ có mưa to. Nhiệt độ những ngày sau thấp nhất 11-14 độ, vùng núi 7-10 độ, núi cao có nơi dưới 3 độ C.\r\n\r\nÔng Nguyên Văn Hưởng, Trưởng phòng Dự báo thời tiết, Trung tâm Dự báo Khí tượng Thủy văn quốc gia, nhận định đợt không khí lạnh này mạnh nhất từ đầu mùa, gây rét hại (trung bình ngày từ 13 độ C trở xuống) ở cả vùng núi và đồng bằng.\r\n\r\n\"Đến ngày 19/12, dự báo có thêm đợt không khí lạnh tăng cường khiến rét kéo dài. Đêm và sáng trời quang mây, tạo điều kiện hình thành băng giá, sương muối\", ông Hưởng nói.\r\nTrang Accuweather của Mỹ dự báo Hà Nội rét đậm, rét hại khoảng 5 ngày (trung bình ngày từ 15 độ C trở xuống). Trong đó, chủ nhật rét nhất, 11-15 độ C. Đến thứ tư tuần sau, khi không khí lạnh tăng cường, rét hại quay trở lại với nhiệt độ thấp nhất 9 độ, ban ngày 17 độ C.\r\n\r\nĐiểm cao trên 1.500 m so với mực nước biển như Sa Pa (Lào Cai) rét hại bắt đầu từ ngày 17/12 và duy trì ít nhất 15 ngày, trung bình ngày dưới 13 độ C. Trong đó, thứ tư tuần sau rét nhất đợt, khoảng 5-11 độ C.\r\n\r\nKhông khí lạnh mạnh nên sẽ tràn đến Trung Trung Bộ từ ngày 16/12 gây mưa giông. Nhiệt độ các tỉnh phía bắc đèo Hải Vân phổ biến 13-18 độ C.\r\n\r\nCơ quan khí tượng cảnh báo không khí lạnh tràn về có thể kèm theo các hiện tượng cực đoan như mưa đá, sét, giông, lốc, ngập úng ở vùng trũng thấp, sạt lở đất ở sườn dốc. Nhiệt độ xuống thấp có thể ảnh hưởng tới cây trồng, vật nuôi.\r\n\r\nVịnh Bắc Bộ và bắc Biển Đông sẽ có gió cấp 7, giật cấp 8-9, sóng biển cao 4-6 m. Vùng biển Quảng Trị đến Quảng Ngãi và khu vực giữa Biển Đông gió mạnh cấp 6-7, sóng biển cao 3-5 m từ chiều tối 16/12.\r\n\r\nTrong một tháng tới, cơ quan khí tượng dự báo không khí lạnh tiếp tục gia tăng về tần suất và cường độ, sang nửa đầu tháng 1/2024 vẫn có thể xuất hiện rét đậm, rét hại, nhưng không kéo dài.', '2023-12-14 00:00:00', 1, '2023-12-14 02:08:53', '2023-12-14 02:08:53'),
(5, 'Giá xăng giảm gần 1.000 đồng một lít', 'https://vnexpress.net/gia-xang-giam-gan-1-000-dong-mot-lit-4688811.html', 'đã đăng', '20231214090640.png', 'Mỗi lít xăng giảm 920-960 đồng, các mặt hàng dầu cũng hạ thêm 550-780 đồng, từ 15h hôm nay.', '20\r\nKinh doanhHàng hóaThứ năm, 14/12/2023, 14:29 (GMT+7)\r\nGiá xăng giảm gần 1.000 đồng một lít\r\nMỗi lít xăng giảm 920-960 đồng, các mặt hàng dầu cũng hạ thêm 550-780 đồng, từ 15h hôm nay.\r\n\r\nTheo điều hành của liên Bộ Công Thương - Tài chính hôm nay, giá xăng RON 95-III (loại phổ biến trên thị trường) giảm 920 đồng, về 21.400 đồng; E5 RON 92 hạ 780 đồng, còn 20.510 đồng một lít.\r\n\r\nDầu hỏa, diesel và mazut cũng giảm về 14.970 - 19.960 đồng một lít, kg tùy loại. Đây là đợt giảm thứ năm của xăng RON 95 và dầu diesel. Sau điều chỉnh hôm nay, giá hai mặt hàng này về ngang mức tháng 5 năm nay.\r\nTừ đầu năm đến nay, giá nhiên liệu trong nước có 35 đợt điều chỉnh, trong đó 17 lần tăng, 13 lần giảm và 4 kỳ giữ nguyên. Sau 5 đợt giảm giá liên tiếp, mỗi lít RON 95-III hạ khoảng 2.520 đồng; E5 RON 92 cũng rẻ hơn 2.100 đồng so với đầu tháng 11. Còn dầu diesel sau 6 lần hạ, hiện thấp hơn tháng trước 2.930 đồng một lít.\r\n\r\nLiên Bộ Công Thương - Tài chính cho biết, thị trường xăng dầu thế giới trong 7 ngày qua giảm do lo ngại tình hình an ninh tại Trung Đông ảnh hưởng tới nguồn cung dầu từ khu vực này. Ngoài ra, việc các quốc gia đạt được thoả thuận lịch sử về giảm mức tiêu thụ nhiên liệu hoá thạch tại COP 28 cũng khiến giá đi xuống.\r\n\r\nBình quân giá thành phẩm giá xăng RON 92 (loại dùng pha chế E5 RON 92) là 84,54 USD một thùng, giảm hơn 5%; RON 95 là 88,54 USD một thùng, giảm 5,23%. Tương tự, các mặt hàng dầu hạ 4,2-7,1% trong một tuần, về mức 94,82-99,23 USD một thùng, riêng dầu mazut là 422,96 USD mỗi tấn.', '2023-12-14 00:00:00', 1, '2023-12-14 02:06:40', '2023-12-14 02:06:40'),
(7, 'Chủ tịch nước chúc mừng Giáng sinh Tổng Giáo phận Huế', 'https://vnexpress.net/chu-tich-nuoc-chuc-mung-giang-sinh-tong-giao-phan-hue-4688784.html', 'đã đăng', '20231214091305.png', 'THỪA THIÊN - HUẾ. Chủ tịch nước Võ Văn Thưởng chúc Đức Tổng giám mục Giuse Nguyễn Chí Linh cùng toàn thể đồng bào công giáo Giáng sinh vui tươi, an lành.', 'Sáng 14/12, Chủ tịch nước Võ Văn Thưởng và lãnh đạo tỉnh Thừa Thiên Huế đến thăm, chúc mừng lễ Giáng sinh Tòa Tổng giám mục Tổng Giáo phận Huế.\r\n\r\nNăm 2023 có nhiều khó khăn, nhưng theo Chủ tịch nước, Việt Nam tiếp tục gặt hái nhiều thành tựu trên tất cả lĩnh vực kinh tế - xã hội, quốc phòng an ninh và đối ngoại quốc tế. \"Trong thành công chung đó, có sự đóng góp rất tích cực của cộng đồng công giáo cả nước, đặc biệt là trong những lĩnh vực như bảo trợ xã hội, phòng chống dịch bệnh\", ông nói.\r\n\r\nChủ tịch nước khẳng định Đảng, Nhà nước luôn nhất quán đường lối, chính sách bảo đảm và tôn trọng tự do, tín ngưỡng của đồng bào, trong đó có đồng bào công giáo, tạo điều kiện để đồng bào sống đẹp đạo, ích đời, vì sự phát triển phồn vinh của đất nước.\r\n\r\nTổng Giám mục Giuse Nguyễn Chí Linh bày tỏ trân trọng được đón Chủ tịch nước Võ Văn Thưởng và đoàn tới thăm Tòa Tổng Giám mục Huế, cảm ơn những chia sẻ về tình hình đất nước, chuyến thăm Tòa thánh Vatican vừa qua đối với cộng đồng Công giáo Việt Nam.\r\n\r\nTổng Giám mục Giuse Nguyễn Chí Linh tin tưởng với chủ trương, chính sách của Đảng, Nhà nước, đồng bào công giáo Việt Nam nói chung và Tổng Giáo phận Huế nói riêng sẽ phát huy hơn nữa tiềm năng, thế mạnh của mình, đóng góp nhiều hơn nữa cho sự nghiệp phát triển và xây dựng đất nước trong thời gian tới.', '2023-12-11 00:00:00', 1, '2023-12-14 02:13:05', '2023-12-14 02:13:05'),
(8, 'Hơn 1.000 tỷ đồng mở rộng 600 m đường ở TP HCM', 'https://vnexpress.net/hon-1-000-ty-dong-mo-rong-600-m-duong-o-tp-hcm-4688372.html', 'đã đăng', '20231214091422.png', 'Thành phố chi hơn 1.000 tỷ đồng mở rộng 600 m đường Chu Văn An, quận Bình Thạnh, từ 5-6 m lên 23 m, kinh phí cao tốp đầu trong các dự án nâng cấp đường trên địa bàn.', 'Dự án mở rộng đường Chu Văn An đoạn từ ngã 5 Bình Hoà tới Phan Chu Trinh, vừa được HĐND TP HCM đồng ý điều chỉnh chủ trương đầu tư với tổng vốn 1.067 tỷ đồng. Nguyên nhân là thay đổi quy mô và thời gian thực hiện.\r\n\r\nVới mức đầu tư trên, đây là dự án có kinh phí cao tốp đầu trong các công trình nâng cấp đường ở thành phố. Công trình hiện do Ban quản lý dự án đầu tư xây dựng khu vực quận Bình Thạnh làm chủ đầu tư, thực hiện trong giai đoạn từ nay tới năm 2026.\r\n\r\nLý giải mức vốn cao như trên, đại diện UBND quận Bình Thạnh cho biết do dự án có khối lượng giải phóng mặt bằng rất lớn. Trong tổng vốn thực hiện, chi phí đền bù dự toán chiếm gần 982 tỷ đồng (khoảng 92%). Cụ thể, có 176 trường hợp bị ảnh hưởng, tổng diện tích thu hồi gần 11.000 m2.\r\n\r\n\"Công trình nằm ở khu vực đô thị phát triển, mức giá cũng được tính sát thị trường, thay đổi nhiều so với trước nên tổng kinh phí thực hiện cao\", đại diện quận Bình Thạnh nói.\r\n\r\nĐường Chu Văn An dài gần 2 km, là một trong những tuyến giao thông chính ở quận Bình Thạnh, kết nối nhiều đường lớn như Đinh Bộ Lĩnh, Phan Chu Trinh, Nơ Trang Long, Phan Văn Trị... Trong đó, đoạn từ ngã 5 Bình Hoà tới đường Phan Chu Trinh đang bị \"thắt cổ chai\" gây ùn tắc thường xuyên, ảnh hưởng đi lại của người dân cũng như việc hoạt động kinh doanh hai bên.\r\n\r\nCách đây 7 năm, thành phố đã duyệt chủ trương đầu tư nâng cấp tuyến đường trên với tổng chiều dài 900 m, mở rộng lên 25 m. Khi đó, dự án có tổng mức đầu tư khoảng 677 tỷ đồng, riêng tiền giải phóng mặt bằng gần 500 tỷ đồng. Sau nhiều năm chưa triển khai, dự án được điều chỉnh với quy mô và phạm vi mở rộng nhằm đồng bộ hạ tầng xung quanh. Tuy nhiên, vốn đầu tư tăng lên vì giá đất đã cao hơn nhiều so với trước.\r\n\r\nTrước đó hồi tháng 9, HĐND TP HCM thông qua chủ trương đầu tư dự án Vành đai 2, đoạn từ cầu Phú Hữu đến Võ Nguyên Giáp, dài 3,5 km, tổng vốn hơn 9.300 tỷ đồng. Đây cũng là dự án giao thông chi phí đầu tư đắt đỏ bậc nhất thành phố khi trung bình một km cần hơn 2.600 tỷ đồng để hoàn thành. Công trình này có vốn đầu tư cao cũng do phần lớn phục vụ bồi thường, với tổng chi phí khoảng 6.675 tỷ đồng.\r\n\r\nTheo các chuyên gia, kinh phí xây đường phụ thuộc vào nhiều yếu tố như vị trí, số làn xe, cầu cạn, nút giao... Tuy nhiên, đường trong nội đô sẽ tốn kém hơn nhiều so với khu vực nông thôn, đất nông nghiệp.', '2023-12-12 00:00:00', 1, '2023-12-14 02:14:22', '2023-12-14 02:41:47'),
(9, 'Sĩ quan Ukraine thừa nhận Nga sở hữu UAV nhiều gấp 7 lần', 'https://vnexpress.net/si-quan-ukraine-thua-nhan-nga-so-huu-uav-nhieu-gap-7-lan-4688669.html', 'đã đăng', '20231214091549.png', 'Sĩ quan Ukraine nhận định Nga có lợi thế rất lớn khi sở hữu số lượng máy bay không người lái (UAV) nhiều gấp 7 lần đối phương.', '\"Tại các khu vực trọng yếu trên tiền tuyến, chúng tôi phải chấp nhận tỷ lệ sau: cứ một UAV Ukraine thì lại có 5-7 chiếc của Nga\", Yury Fedorenko, chỉ huy đại đội Achilles thuộc lữ đoàn xung kích số 92 Ukraine, ngày 12/12 cho biết.\r\n\r\nTheo Fedorenko, chiến thuật của Nga và Ukraine khác nhau vì sự chênh lệch về số lượng UAV. Do sở hữu ít UAV hơn, các đơn vị Ukraine phải sử dụng chúng thận trọng hơn.\r\n\r\n\"Ukraine chỉ triển khai UAV khi xác định được mục tiêu, trong khi Nga có lợi thế trong việc liên tục sử dụng phương tiện này\", Fedorenko nói. \"Các UAV góc nhìn thứ nhất của Nga hoạt động liên tục nhằm phát hiện mục tiêu để tấn công\".\r\n\r\nCác loại phương tiện không người lái như UAV và xuồng tự sát trở thành một trong những vũ khí nổi bật trong xung đột Nga - Ukraine, khi cả hai bên tham chiến đều tăng cường sử dụng chúng, tung ra các mẫu khí tài và chiến thuật mới.\r\n\r\nUkraine gần đây ra mắt một số mẫu phương tiện không người lái mới như UAV Backfire có khả năng chống nhiễu, phương tiện không người lái trên bộ Ratel S và tàu ngầm không người lái Marichka.\r\n\r\nLực lượng Ukraine nhiều lần sử dụng UAV cùng xuồng tự sát tấn công các mục tiêu trên và xung quanh bán đảo Crimea, cũng như một số vị trí sâu trong lãnh thổ Nga.\r\n\r\nTrong khi đó, Nga tăng cường sản xuất UAV giá rẻ và dùng các mẫu như Italmas/Geran-3, Geran-2, Lancet tấn công vị trí của Ukraine. Nga đang chế tạo những mẫu UAV có sức công phá cao hơn dựa trên dòng Geran-2.\r\n\r\nLực lượng Nga mở nhiều đợt tập kích bằng UAV nhằm vào mục tiêu sâu trong lãnh thổ Ukraine như thủ đô Kiev, cùng một số cảng biển và cảng sông của nước này.\r\n\r\nMelinda Haring, chuyên gia tại viện nghiên cứu Hội đồng Đại Tây Dương của Mỹ, nhận định bất chấp tiến bộ công nghệ đạt được, Ukraine vẫn tụt hậu so với Nga trong sử dụng UAV trên chiến trường. Theo bà Haring, lý do của tình trạng này là Ukraine thiếu người vận hành, số lượng UAV hạn chế và thiết bị kém chất lượng.\r\n\r\nTheo Bob Hamilton, chuyên gia thuộc Chương trình Á - Âu của Viện Nghiên cứu Chính sách Đối ngoại tại Mỹ, hồi tháng 8 đánh giá Ukraine \"không có khả năng sử dụng UAV tấn công đủ mục tiêu nằm sâu trong lãnh thổ Nga để làm xói mòn ý chí chiến đấu của nước này\".', '2023-12-13 00:00:00', 1, '2023-12-14 02:15:49', '2023-12-14 02:15:49'),
(10, 'Đánh bom khiến 23 binh sĩ Pakistan thiệt mạng', 'https://vnexpress.net/danh-bom-khien-23-binh-si-pakistan-thiet-mang-4688495.html', 'đã đăng', '20231214091739.png', 'ột nhóm 6 người lái xe tải chở chất nổ đâm vào doanh trại quân sự ở tây bắc Pakistan, khiến ít nhất 23 binh sĩ thiệt mạng.', 'Theo quân đội Pakistan, vụ tấn công xảy ra ngày 12/12 tại thị trấn Daraban, cách thành phố Dera Ismail Kha gần biên giới với Afghanistan khoảng 60 km. Mục tiêu của vụ tấn công là một đồn cảnh sát được quân đội Pakistan sử dụng làm căn cứ ở thị trấn.\r\n\r\nNhóm tay súng đã lái xe tải chở đầy chất nổ đâm vào cổng chính của đồn trước khi kích nổ chiếc xe. Nhóm này sau đó tiếp tục đấu súng với các binh sĩ bên trong căn cứ trong nhiều giờ.\r\n\r\n\"Các vụ nổ đã khiến tòa nhà bị sập, gây ra nhiều thương vong\", quân đội Pakistan cho biết, thêm rằng toàn bộ 6 tay súng đều đã bị bắn hạ.\r\n\r\nVụ tấn công khiến ít nhất 23 binh sĩ Pakistan thiệt mạng và 32 người bị thương, một số ở trong tình trạng nguy kịch.\r\n\r\nNhóm Tahreek-e-Jihad Pakistan (TJP), chi nhánh của lực lượng Taliban tại Pakistan, nhận trách nhiệm gây ra vụ tấn công. Đây lực lượng mới nổi gần đây, từng gây ra một số vụ đánh bom lớn tại nước này trong vài tháng qua.\r\n\r\nChính phủ Pakistan cho biết TJP có liên hệ với Tahreek-e-Taliban Pakistan (TTP), nhóm vũ trang Hồi giáo từng thực hiện hàng chục vụ tấn công đẫm máu khiến hàng trăm người chết ở nước này kể từ khi xuất hiện năm 2007, song TJP chưa xác nhận thông tin.\r\n\r\nThủ tướng Pakistan Anwaar ul Haq Kakar lên án vụ tấn công của TJP và bày tỏ \"chia buồn sâu sắc\" với gia đình các nạn nhân. \"Chúng ta sẽ đáp trả\", ông khẳng định.\r\n\r\nBộ Ngoại giao Pakistan cùng ngày triệu tập đặc phái viên của Kabul, yêu cầu chính quyền Taliban \"tiến hành điều tra toàn diện và có hành động cứng rắn đối với thủ phạm gây ra vụ tấn công\". Cơ quan này không cho biết có công dân Afghanistan nào tham gia sự việc việc hay không.\r\n\r\nMột quan chức tình báo cấp cao giấu tên của Pakistan cho biết có chứng cứ cho thấy nhóm tay súng được dẫn đầu bởi một công dân Afghanistan. Zabihullah Mujahid, phát ngôn viên của Taliban, cho biết lực lượng này sẽ điều tra vụ việc, song khẳng định không liên quan đến nhóm tay súng.\r\n\r\nNgoại trưởng Mỹ Anthony Blinken lên án vụ tấn công, khẳng định Washington \"sẽ sát cánh cùng người dân Pakistan để đảm bảo đưa thủ phạm ra trước công lý\".\r\n\r\nQuan hệ giữa Islamabad và Kabul những tháng gần đây đã giảm xuống mức thấp nhất trong nhiều năm. Hồi tháng 10, chính phủ Pakistan ra lệnh trục xuất toàn bộ công dân Afghanistan không có giấy tờ hợp pháp ở nước này, cáo buộc họ gây ra 14 trong tổng số 24 vụ đánh bom tự sát tại Paksitan trong năm nay.\r\n\r\nIslamabad cũng cho rằng các nhóm vũ trang Hồi giáo đã xây dựng căn cứ ở Afghanistan để huấn luyện và thực hiện các vụ tấn công vào lãnh thổ Pakistan, song Kabul bác bỏ, khẳng định an ninh của Pakistan là vấn đề nội bộ của Islamabad.\r\n\r\nSố lượng các vụ tấn công tại Pakistan gần đây gia tăng, gây lo ngại về khả năng đảm bảo an ninh của Islamabad trước thềm tổng tuyển cử vào tháng 2 năm sau.', '2023-12-06 00:00:00', 1, '2023-12-14 02:17:39', '2023-12-14 02:17:39'),
(11, 'Khoảnh khắc xe tăng Israel chặn đòn đánh của Hamas', 'https://vnexpress.net/khoanh-khac-xe-tang-israel-chan-don-danh-cua-hamas-4688755.html', 'đã đăng', '20231214091918.png', 'Video do Hamas công bố cho thấy hệ thống Trophy trên xe tăng Merkava Israel kích hoạt, chặn đòn tập kích ở cự ly gần của nhóm vũ trang.', 'Lực lượng Hamas ngày 14/12 đăng video giao tranh ở thành phố Khan Younis, điểm nóng xung đột tại miền nam Dải Gaza. Trong video, xe tăng chủ lực Merkava Mark 4M của Lực lượng Phòng vệ Israel (IDF) đang di chuyển với tốc độ cao trên đường phố thì bị thành viên Hamas dùng súng chống tăng tập kích ở cự ly gần.\r\n\r\nHệ thống Phòng thủ Chủ động (APS) Trophy trang bị trên xe tăng Merkava lập tức được kích hoạt, phóng ra đạn kim loại phá hủy đạn chống tăng của Hamas. Video không cho thấy hình ảnh cận cảnh của chiếc xe sau vụ tấn công, song nó vẫn tiếp tục di chuyển về phía trước với tốc độ cũ, cho thấy đòn đánh không gây ảnh hưởng tới xe tăng Israel.\r\n\r\nĐoạn sau của video có cảnh một xe tăng Merkava Mark 4M khác nằm bất động, dường như đã bị vô hiệu hóa hoặc bỏ lại. Tuy nhiên, hệ thống Trophy của xe tăng vẫn kích hoạt khi bị lực lượng Hamas tấn công, chặn đứng quả đạn mà nhóm vũ trang phóng tới.\r\n\"Video cho thấy giá trị của các APS như Trophy, đặc biệt là khi trang bị cho xe tăng, thiết giáp hoạt động trong môi trường đô thị chật hẹp\", Joseph Trevithick, chuyên gia quân sự của Drive, nhận định. \"Môi trường này cung cấp cho lực lượng phòng thủ nhiều chỗ ẩn nấp thuận lợi để phục kích khí tài đối phương ở cự ly gần\".\r\n\r\nMerkava là dòng xe tăng chủ lực được Israel phát triển từ thập niên 1970 và đưa vào biên chế năm 1979. Chúng được thiết kế nhằm cung cấp khả năng bảo vệ tối đa cho tổ lái, với giáp mặt trước được gia cố, động cơ nằm ở mũi xe và tháp pháo lùi về phía sau, cùng cửa ra vào ở đuôi xe.\r\n\r\nBiến thể Merkava Mark 4M được triển khai từ năm 2011, có đặc điểm nổi bật là hệ thống phòng thủ chủ động Trophy được ví như tấm \"màn thép\" bảo vệ phương tiện trước tên lửa chống tăng dẫn đường (ATGM) và đạn xuyên giáp.\r\n\r\nHệ thống này bao gồm các cảm biến, radar cảnh giới, máy tính và tổ hợp đánh chặn. Radar của Trophy có thể quét khu vực 360 độ theo mặt phẳng ngang để phát hiện tên lửa và đạn chống tăng bắn tới. Khi phát hiện mục tiêu, máy tính sẽ phân tích và ra lệnh phóng các quả đạn kim loại để vô hiệu hóa mối đe dọa trước khi nó tiếp cận giáp chính của xe tăng.\r\n\r\nHệ thống Trophy còn có thể truy ngược lại đường bay của mối đe dọa, tự động hướng nòng pháo về nơi quả tên lửa hoặc viên đạn được bắn ra. Tuy nhiên, Trophy không thể quét 360 độ theo mọi hướng, nên không đạt hiệu quả bảo vệ trước các đòn tấn công đột nóc.\r\nTrong cuộc tập kích lãnh thổ Israel hôm 7/10, lực lượng Hamas đã tiêu diệt ít nhất một xe tăng Merkava Mark 4M bằng cách dùng UAV thả đầu đạn PG-7VR vào mặt trên mũi xe, nơi có lớp giáp tương đối mỏng.\r\n\r\nĐể khắc phục điểm yếu này, IDF đã hàn giáp lồng lên nóc tháp pháo cho một số xe tăng Merkava tác chiến ở Dải Gaza, nhằm tăng khả năng bảo vệ trước đòn đánh từ trên cao.\r\n\r\nTrophy cũng không được thiết kế để chống lại mọi đòn tấn công, như khi bị đối phương áp sát và cài thiết bị nổ. Hệ thống này có thể gây nguy hiểm cho những người đứng gần xe, do đó thường được tắt khi di chuyển cùng với bộ binh, tạo điều kiện để lực lượng đối phương tập kích. Trophy cũng khó hoạt động hiệu quả khi bị tấn công bởi nhiều đầu đạn cùng một lúc.\r\n\r\nTheo các thống kê nguồn mở, ít nhất 24 xe tăng Merkava đã bị phá hủy hoặc hư hại kể từ khi xung đột bùng phát giữa Hamas và Israel hồi tháng 10, cho thấy Trophy không thể giúp xe tăng Israel trở nên \"bất khả xâm phạm\".\r\n\r\n\"Dù vậy, video do chính Hamas công bố vẫn chứng tỏ rằng lớp phòng thủ bổ sung từ hệ thống Trophy có tầm quan trọng như thế nào\", chuyên gia Trevithick nhận xét.', '2023-12-14 00:00:00', 1, '2023-12-14 02:19:18', '2023-12-14 02:19:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
