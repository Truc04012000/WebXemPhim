-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 28, 2020 lúc 11:22 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `ten_film` text CHARACTER SET utf8 DEFAULT NULL,
  `daodien` text CHARACTER SET utf8 DEFAULT NULL,
  `dienvien` text NOT NULL,
  `theloai` text CHARACTER SET utf8 DEFAULT NULL,
  `khoichieu` date DEFAULT NULL,
  `thoiluong` text NOT NULL,
  `ngonngu` text NOT NULL,
  `rated` text NOT NULL,
  `images` text NOT NULL,
  `gioithieu` text CHARACTER SET utf8 DEFAULT NULL,
  `trailer` text NOT NULL,
  `trangthai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `film`
--

INSERT INTO `film` (`id`, `ten_film`, `daodien`, `dienvien`, `theloai`, `khoichieu`, `thoiluong`, `ngonngu`, `rated`, `images`, `gioithieu`, `trailer`, `trangthai`) VALUES
(1, 'BÀ HOÀNG NÓI DỐI', 'Chang You-jeong', 'Ra Mi Ran, Na Moon Hee, Kim Mu Yeol,…', 'Hài', '2020-05-15', '105 phút', 'Tiếng Hàn - Phụ đề tiếng Việt', 'C16 - PHIM CẤM KHÁN GIẢ DƯỚI 16 TUỔI', '../images/movie/ba-hoang-noi-doi.jpg', 'Bộ phim xoay quanh câu chuyện của nữ nghị sĩ Joo Sang Sook với khả năng nói dối “như cơm bữa”, nhờ đó bà gặt hái được rất nhiều thành công trong sự nghiệp chính trị. Đột nhiên một ngày nọ, bà Joo không thể nói dối được nữa. Sự việc trở nên hết sức nguy cấp khi ngày tranh cử đã gần kề, liệu Joo Sang Sook có thành công đắc cử lần thứ tư hay không khi mọi lời bà nói ra đều là sự thật nghiệt ngã?', 'https://www.youtube.com/embed/DMTVg0QtCUg', 'Đang Chiếu'),
(2, 'ÁC MỘNG KINH HOÀNG', 'David Artur Clark', 'Nicola Lambo ( American Crime Story, Will & Grace), Hannah Ward (Ballistic, Sunny in the Dark), Conrad Goode (Paul Blart: Mall Cop, The Longest Yard), Micah Parker ( Mob City, Lola Versus)', 'Kinh Dị', '2020-05-15', '77 phút', 'Tiếng Anh - Phụ đề Tiếng Việt', 'C18 - PHIM CẤM KHÁN GIẢ DƯỚI 18 TUỔI', '../images/movie/ac-mong-kinh-hoang.jpg', 'Sau cái chết bi thảm của con trai út, người mẹ và con gái trải qua những đêm dài kinh hoàng trong nỗi đau mất mát. Họ bắt đầu có dấu hiệu của chứng bệnh rối loạn giấc ngủ. Những ác mộng ngày càng dữ dội và dày đặc hơn...', 'https://www.youtube.com/embed/yffeet10TCM', 'Đang Chiếu'),
(3, 'BẪY LINH HỒN', 'Kerry Harris', 'Radha Mitchell, Henry Thomas, Lin Shaye, Finlay Wojtak-Hissong, Jules Willcox', 'Bí ẩn, Kinh Dị', '2020-05-15', '84 phút', 'Tiếng Anh - Phụ đề Tiếng Việt', 'C18 - PHIM CẤM KHÁN GIẢ DƯỚI 18 TUỔI', '../images/movie/dreamkatcher.jpg', 'Sau khi lấy trộm lá bùa bí ẩn từ người hàng xóm kỳ dị, cậu bé Josh thường xuyên gặp phải ác mộng. Trong mơ, người mẹ quá cố của Josh xuất hiện và thôi thúc cậu giết chết bà mẹ kế Gail. Hành vi của Josh ngày một bất thường. Linh hồn của cậu như đang bị quỷ dữ chiếm hữu và khống chế. Liệu có quá trễ để Gail kịp giải cứu con trai mình khỏi cổng địa ngục?', 'https://www.youtube.com/embed/DKRjVUTDuVg', 'Đang Chiếu'),
(4, 'BẠN ÂM 3: ĐOẠN KẾT', 'Awi Suryadi', 'Prilly Latuconsina, Rizky Nazar, Syifa Hadju', 'Kinh Dị', '2020-05-15', '90 phút', 'Indonesia, phụ đề Tiếng Anh, Tiếng Việt', 'C16 - PHIM CẤM KHÁN GIẢ DƯỚI 16 TUỔI', '../images/movie/ban-am.jpg', 'Sau nhiều năm tuổi thơ với những người bạn đặc biệt, Risa mong muốn có một cuộc sống bình thường cùng bạn trai Dimas. Cô đã lựa chọn đóng con mắt thứ ba của mình nhưng điều đó đã đánh thức cơn ác mộng khủng khiếp hơn.', 'https://www.youtube.com/embed/YUsTDGiW4sI', 'Đang Chiếu'),
(5, 'BLOODSHOT', 'Dave Wilson', 'Vin Diesel, Eiza González, Jóhannes Haukur Jóhannesson, Michael Sheen, Toby Kebbell', 'Hành Động', '2020-03-13', '110 phút', 'Tiếng Anh - Phụ đề Tiếng Việt', 'C18 - PHIM CẤM KHÁN GIẢ DƯỚI 18 TUỔI', '../images/movie/bloodshot.jpg', 'Ray Garrison là một sĩ quan cấp cao đã hy sinh trong một trận chiến. Thế nhưng, anh được tái sinh bằng công nghệ cao, giúp Ray sở hữu sức mạnh siêu nhiên và khả năng phục hồi nhanh chóng. Vận dụng những kỹ năng mới, anh săn lùng gã đàn ông đã giết vợ mình. Thế nhưng, khi sự thật dần hé mở, Ray nhận ra rằng không phải mọi thứ đều đáng tin. Ngay cả chính bản thân anh.', 'https://www.youtube.com/embed/TP6MkGUZMQI', 'Đang Chiếu'),
(6, 'JOHNNY ENGLISH: TÁI XUẤT GIANG HỒ', 'David Kerr', 'Olga Kurylenko, Rowan Atkinson, Emma Thompson', 'Hành Động, Phiêu Lưu', '2018-09-21', '89 phút', 'Tiếng Việt với phụ đề Tiếng Anh', 'C13 - Phim cấm khán giả dưới 13 tuổi', '../images/movie/mrbean.jpg', 'JOHNNY ENGLISH: TÁI XUẤT GIANG HỒ là phần thứ ba của loạt phim hài Johnny English, với Rowan Atkinson trong vai một gã bỗng dưng trở thành một điệp viên bí mật. Cuộc phiêu lưu mới bắt đầu khi một vụ điều tra hệ thống an ninh mạng cho thấy danh tính của tất cả các điệp viên đang hoạt động tại Anh, và Johnny là hy vọng cuối cùng để điều tra bí mật ấy. Dù được biết là một điệp viên nghỉ hưu nhưng đây là lần đầu tiên gã giang hồ này bắt tay động với sứ mệnh tìm kiếm kẻ tấn công. Là một người với kỹ năng ít ỏi và năng lực hạn chế, Johnny English có phải vượt qua được những thách thức trong thời buổi công nghệ hiện đại để hoàn thành sứ mệnh này thành công hay không?', 'https://www.youtube.com/embed/goh-FbUbSA0', 'Đang Chiếu'),
(7, 'VU QUY ĐẠI NÁO', 'Lê Thiện Viễn', 'Ngọc Trinh, Diệu Nhi, La Thành, Hồ Vĩnh Anh, Việt Hương, Chí Tài, Phi Phụng, Lê Giang, Tiết Cương, Huỳnh Lập, Quang Trung...', 'Gia đình, Hài, Tình cảm', '2019-02-22', '115 phút', 'Tiếng Việt', 'C13 - Phim cấm khán giả dưới 13 tuổi', '../images/movie/vqdn.jpg', 'Trang (Ngọc Trinh) và Hiền (Diệu Nhi) từng thề sẽ không để bạn ế một mình, nhưng cả hai lại đang khốn khổ trước sức ép lấy chồng từ gia đình. Không cam chịu, Trang rủ Hiền cùng Hoàng (La Thành) - cậu bạn thân cấp 3 đồng thời cũng là người đang bị \"ép duyên\" với cô - cùng nhau bỏ trốn. Vốn là một cô gái có đầu óc kinh doanh, Trang cùng hai người bạn nghĩ ra cách kiếm tiền bằng việc nhận tổ chức tiệc cưới. Trên đường đi, họ tình cờ kết nạp thêm anh chàng ca sĩ Tài (Hồ Vĩnh Anh) vào hội, và may mắn được một người phụ nữ tốt bụng là dì Hai (Việt Hương) cưu mang. Từ đó, một ê kíp tổ chức đám cưới độc nhất vô nhị được thành lập với bao tình huống bi hài liên tiếp xảy ra.', 'https://www.youtube.com/embed/0ZYoBQflqbA', 'Đang Chiếu'),
(8, 'ANH TRAI YÊU QUÁI', 'Vũ Ngọc Phượng', 'Kiều Minh Tuấn, Isaac, Diệu Nhi, Phi Phụng...', 'Gia đình, Hài, Tâm Lý', '2019-11-29', '109 phút', 'Tiếng Việt - Phụ đề Tiếng Anh', 'C13 - Phim cấm khán giả dưới 13 tuổi', '../images/movie/atyq.jpg', 'Lâm là một vận động viên Judo quốc gia bỗng chốc phải bỏ dở sự nghiệp vì gặp chấn thương mất đi thị giác. Phong - người anh cùng cha khác mẹ đang ở trong tù - ngay lập tức lợi dụng bi kịch của em trai để xin được ân xá về nhà chăm sóc em. Chưa thể chấp nhận sự thật mình sẽ bị mù vĩnh viễn, Lâm càng phát điên khi ông anh 10 năm không gặp bỗng dưng trở về, mang theo toàn phiền toái. Cuộc đoàn tụ không mong muốn đẩy hai anh em Phong và Lâm vào những tình huống bi hài, khi vừa phải chịu đựng tật xấu của nhau, vừa tìm cách giải quyết những mâu thuẫn trong quá khứ.', 'https://www.youtube.com/embed/jRhw9v2MEjQ', 'Đang Chiếu'),
(9, 'PHI VỤ ĐÀO TẨU', 'Francis Annan', 'Daniel Radcliffe,Daniel Webber, Mark Leonard Winter, Ian Hart', 'Hồi hộp', '2020-05-09', '106 phút', 'Tiếng Anh - Phụ đề Tiếng Việt', 'C13 - Phim cấm khán giả dưới 13 tuổi', '../images/movie/pretoria.jpg', 'Dựa trên câu chuyện có thật về cuộc đào tẩu thần kì khỏi nhà tù an ninh Pretoria (Nam Phi) của hai nhà hoạt động chính trị Tim Jerkins (Daniel Radcliffe) và Stephen Lee (Daniel Webber), bộ phim tái hiện chân thật và nghẹt thở kế hoạch vượt ngục phi thường và kịch tính. Nhờ vào óc quan sát tỉ mỉ, trí thông minh và sự khéo léo, họ đã tạo ra những chiếc chìa khóa gỗ vượt 10 cánh cửa thép và tìm lại tự do cho chính mình!', 'https://www.youtube.com/embed/NmhFX7whhhI', 'Đang Chiếu'),
(10, 'SA MẠC CHẾT', 'Sandra Sciberras', 'Jolene Anderson, Stef Dawson, Talina Naviede', 'Hồi hộp, Tâm Lý', '2020-03-22', '89 phút', 'Tiếng Anh - Phụ đề Tiếng Việt', 'C18 - Phim cấm khán giả dưới 18 tuổi', '../images/movie/samacchet.jpg', 'Sau một vụ rơi tàu bay đầy bí ẩn, một loài ký sinh trùng ngoài hành tinh bất ngờ tấn công cư dân của một thị trấn nhỏ nằm cô lập giữa sa mạc. Chúng chiếm lấy não của nạn nhân, biến họ trở thành những sinh vật điên loạn và khát máu. Không còn cách nào khác, những cư dân khỏe mạnh còn lại của thị trấn phải chiến đấu để bảo vệ chính mình. Tuy nhiên, họ dần nhận ra rằng mối nguy hiểm không chỉ đến từ lũ ký sinh trùng, mà còn liên quan đến sự xuất hiện của một loài quái vật to lớn hơn\r\n', 'https://www.youtube.com/embed/6gTFXC418vk', 'Đang Chiếu'),
(11, 'KẺ VÔ HÌNH', 'Leigh Whannell', 'Elisabeth Moss, Oliver Jackson-Cohen, Storm Reid', 'Khoa Học Viễn Tưởng, Kinh Dị\r\n', '2020-02-28', '125 phút', 'Tiếng Anh - Phụ đề Tiếng Việt', 'C18 - Phim cấm khán giả dưới 18 tuổi', '../images/movie/ke_vo_hinh.jpg', 'Kẻ Vô Hình xoay quanh Cecilia Kass - cô gái bị mắc kẹt trong mối quan hệ đầy kiểm soát và bạo lực với khoa học gia tài năng và giàu có tên Adrian Griffin.', 'https://www.youtube.com/embed/zWztOTVPq4c', 'Đang Chiếu'),
(12, 'THÁNG NĂM RỰC RỠ', 'Nguyễn Quang Dũng', 'Hồng Ánh - Hoàng Yến Chibi, Thanh Hằng - Hoàng Oanh, Jun Vũ, Mỹ Uyên - Khổng Tú Quỳnh, Mỹ Duyên - Trịnh Thảo, Minh Tuyền - Minh Thảo...', 'Hài, Tâm Lý', '2020-03-09', '118 phút\r\n', 'Tiếng Việt với phụ đề tiếng Anh', 'C16 - Phim cấm khán giả dưới 16 tuổi', '../images/movie/thang_nam_ruc_ro.jpg', 'THÁNG NĂM RỰC RỠ là câu chuyện về tình bạn, về thời tuổi trẻ cuồng nhiệt của một nhóm bạn gái thời trung học. Bộ phim là hành trình đi tìm lại những ký ức thanh xuân của Hiểu Phương (Hồng Ánh) và nhóm nữ quái Ngựa Hoang. Tình cờ gặp lại người bạn cũ Mỹ Dung (Thanh Hằng) và cũng là trưởng nhóm Ngựa Hoang, Hiểu Phương đau xót khi biết bạn đang mắc bệnh hiểm nghèo. Để thực hiện tâm nguyện của bạn thân, Hiểu Phương quyết tâm tìm lại các thành viên của nhóm Ngựa Hoang. Hành trình đi tìm những người bạn cũ cũng chính là hành trình để Hiểu Phương trở về với những “THÁNG NĂM RỰC RỠ” của cuộc đời mình.', 'https://www.youtube.com/embed/xoss0N9txWI', 'Đang Chiếu'),
(13, 'NHIỆM VỤ BẤT KHẢ THI: SỤP ĐỔ', 'Christopher McQuarrie', 'Rebecca Ferguson, Vanessa Kirby, Tom Cruise', 'Hành Động, Hồi hộp, Phiêu Lưu', '2020-05-22', '147 phút', 'Tiếng Anh với phụ đề tiếng Việt', 'C16 - Phim cấm khán giả dưới 16 tuổi', '../images/movie/nvbkt.jpg', 'Ba năm sau Mission: Impossible – Rogue Nation, chàng đặc vụ điển trai và hào hoa bậc nhất trên màn ảnh rộng Ethan Hunt sẽ tái xuất màn bạc trong mùa hè 2018. Trailer đầu tiên của Nhiệm Vụ Bất Khả Thi: Sụp Đổ (Tựa gốc: Mission: Impossible - Fallout) vừa được hãng phát hành Paramount tung ra ngay lập tức trở thành tâm điểm của đại chúng bởi sự trở lại của ngôi sao hành động hàng đầu thế giới Tom Cruise cùng những khoảnh khắc nghẹt thở bắt nguồn từ pha hành động đẳng cấp mang đậm dấu ấn cá nhân anh.', 'https://www.youtube.com/embed/LHqjCiMJlfo', 'Sắp Chiếu'),
(14, 'BABA YAGA: ÁC QUỶ RỪNG SÂU', 'Svyatoslav Podgayevskiy', 'Svetlana Ustinova, Maryana Spivak, Alexey Rozin', 'Kinh Dị', '2020-05-22', '96 phút', 'Tiếng Nga - Phụ đề tiếng Anh/Việt', 'C18 - Phim cấm khán giả dưới 18 tuổi', '../images/movie/babayaga.jpg', 'Lấy cảm hứng từ phù thủy Baba Yaga bắt cóc và ăn thịt trẻ con trong truyền thuyết dân gian, phim bắt đầu khi một gia đình trẻ chuyển đến căn hộ tại vùng ngoại ô. Một cô bảo mẫu được thuê về để chăm sóc bé gái mới sinh của gia đình. Ả nhanh chóng chiếm được cảm tình của mọi người trừ cậu con trai lớn Egor. Và rồi, một ngày nọ, khi trở về nhà, Egor hoảng hốt phát hiện em gái của mình đã biến mất cùng cô bảo mẫu đáng nghi. Ngạc nhiên thay, trước tình huống đó, bố mẹ cậu dường như không có chút ký ức nào về đứa con gái bé bỏng của họ. Egor bắt đầu tìm hiểu sự việc và phát hiện tấn bi kịch này bắt đầu từ nhân vật đáng sợ có tên Baba Yaga.', 'https://www.youtube.com/embed/MaZw-beCtdQ', 'Sắp Chiếu'),
(15, 'TRUYỀN THUYẾT VỀ QUÁN TIÊN', 'Đinh Tuấn Vũ', 'Đỗ Thuý Hằng, Hồ Minh Khuê, Hoàng Mai Anh, Nguyễn Minh Hải, Leo Nguyễn, Trần Việt Hoàng, NSND. Quốc Trị, Lê Hoàng Long, Thế Nguyên…', 'Bí ẩn', '2020-05-22', '114 phút', 'Tiếng Việt - Phụ đề Tiếng Anh', 'C16 - Phim cấm khán giả dưới 16 tuổi', '../images/movie/quantien.jpg', 'Ba cô gái xinh đẹp Mùi (Thúy Hằng), Phượng (Minh Khuê) và Tuyết Lan (Mai Anh) sống ở một hang động trong rừng Trường Sơn, nhận một nhiệm vụ đặc biệt là tiếp đón các anh \"lính lái xe\" tới nghỉ chân trong hang. Mỗi người một số phận, nhưng điểm chung là đều phải chịu đựng nỗi cô đơn tận cùng trong một hang sâu giữa rừng già mà không phải ai cũng hiểu và thấu cảm được.', 'https://www.youtube.com/embed/VLVoVPXMkMw', 'Sắp Chiếu'),
(16, 'QUỶ LÙN TINH NGHỊCH', 'Walt Dohrn', 'Anna Kendrick, Justin Timberlake, Rachel Bloom', 'Hoạt Hình', '2020-05-29', '91 phút', 'Tiếng Anh - Phụ đề Tiếng Việt; Lồng tiếng', 'P - Phim dành cho mọi đối tượng', '../images/movie/payoff.jpg', 'Tiếp nối phần trước, Quỷ lùn tinh nghịch: Chuyến lưu diễn thế giới đưa người xem trở lại thế giới Trolls cùng Poppy, cô quỷ lùn vui vẻ nhất từng được biết tới. Qua lời kể của “già làng” King Peppy, nguồn gốc của vương quốc Trolls dần được hé lộ. Từ rất xưa tổ tiên trolls đã tạo ra cây đàn thần 6 dây, mỗi dây ứng với một thể loại nhạc khác nhau gồm pop, đồng quê - country, funk, techno, cổ điển và rock.', 'https://www.youtube.com/embed/zWTuz_T-Otc', 'Sắp Chiếu'),
(17, 'KẺ ĐÀO TẨU GIẤC MƠ', 'Nikita Argunov', 'Milos Bikovic, Aleksey Serebryakov, Lyubov Aksyonova', 'Khoa Học Viễn Tưởng', '2020-05-29', '123 phút', 'Tiếng Anh - Phụ đề Tiếng Việt', 'C16 - Phim cấm khán giả dưới 16 tuổi', '../images/movie/kdtgm.jpg', 'Một kiến trúc sư trẻ tài năng tỉnh dậy sau một tai nạn kinh hoàng và phát hiện rằng anh ta đang lạc trong một thế giới khác kỳ lạ và hỗn loạn. Thế giới đó được gọi là COMA và ở đó những toà nhà, những dòng sông và thành phố đều có thể tồn tại trong cùng một không gian của một căn phòng. Những định luật vật lý anh được học không còn đúng ở thế giới này và bên cạnh việc thích nghi, anh ta còn phải chiến đấu để bảo vệ mạng sống của mình cũng như tìm cách để thoát ra, trở về với thế giới thực...', 'https://www.youtube.com/embed/uneSgQPwk6g', 'Sắp Chiếu'),
(18, 'KAIJI: TRẬN QUYẾT TỬ', 'Toya Sato', 'Tatsuya Fujiwara, Sota Fukushi, Nagisa Sekimizu, Mackenyu Arata, Kotaro Yoshida…', 'Hồi hộp, Kịch tính, Phiêu Lưu', '2020-05-29', '129 phút', 'Tiếng Nhật - Phụ đề Tiếng Việt', 'C16 - Phim cấm khán giả dưới 16 tuổi', '../images/movie/kaiji.jpg', 'Kaiji: Trận Quyết Tử xoay quanh cuộc sống của Kaiji tại Tokyo trong thời điểm khó khăn về kinh tế. Bởi không thể tìm được một công việc nghiêm túc, Kaiji bắt đầu đắm chìm vào cờ bạc và trở thành một con nợ đầy tai tiếng. Một ngày nọ, một kẻ thu nợ có tên là Endo đã tìm Kaiji và đưa cho anh ta hai sự lựa chọn: hoặc lao động khổ sai trong vòng 10 năm hoặc tham gia những trò cờ bạc trong một đêm để kiếm được số tiền hoàn nợ.', 'https://www.youtube.com/embed/XsaD3opkck4', 'Sắp Chiếu'),
(19, 'SAMSAM', 'Tanguy de Kermel', 'Isaac Lobé-Lebel, Lior Chabbat, Jérémy Prévost, Sébastien Desjours', 'Hoạt Hình', '2020-06-05', '78 phút', 'Lồng tiếng', 'P - Phim dành cho mọi đối tượng', '../images/movie/samsam.jpg', 'Nhóc tì siêu quậy Samsam có tất cả mọi thứ mà bao đứa trẻ trên hành tinh Sam đều mơ ước: bố mẹ là hai siêu anh hùng nổi tiếng, học tập ở một ngôi trường danh giá chuyên đào tạo các thế hệ siêu nhân tương lai, thậm chí Samsam còn có hẳn một đĩa bay riêng để vi vu khắp nơi khắp chốn. Thế nhưng, cậu bé lại không có chút siêu năng lực nào, hoàn toàn khác biệt với tất cả các thành viên trong gia đình cũng như bạn bè đồng trang lứa. Bố mẹ lo lắng, bè bạn trêu ghẹo, Samsam bắt đầu hành trình tới hành tinh Marth bí ẩn cùng người bạn mới Mega, quyết tâm tìm kiếm sức mạnh ẩn tiềm của bản thân mình.', 'https://www.youtube.com/embed/rm5j7pbpRZ4', 'Sắp Chiếu'),
(20, 'TÔI LÀ NÃO CÁ VÀNG', ' Lê Hướng Nam', 'Khánh Hiền, Thu Trang, La Thành, Tuấn Trần, Kiều Minh Tuấn', 'Hài, Tình cảm', '2020-06-05', '120 phút', 'Tiếng Việt - Phụ đề Tiếng Anh', 'C16 - Phim cấm khán giả dưới 16 tuổi', '../images/movie/tlncv.jpg', 'Tôi Là Não Cá Vàng xoay quanh cuộc sống của một nhà thiết kế thời trang xinh đẹp nhưng mắc căn bệnh Alzheimer. Với cô, mỗi ngày đều là một ngày mới vì những ký ức ngày cũ dường như tan biến cả.', 'https://www.youtube.com/embed/s-1DZTSmrk4', 'Sắp Chiếu'),
(21, 'VÙNG ĐẤT CÂM LẶNG', 'John Krasinski', 'Emily Blunt, John Krasinski, Noah Jupe', 'Kinh Dị, Tâm Lý', '2020-05-22', '91 phút\r\n', 'Tiếng Anh với phụ đề tiếng Việt', 'C16 - Phim cấm khán giả dưới 16 tuổi', '../images/movie/aquietplace.jpg', 'Một thế lực siêu nhiên đang đe dọa mạng sống của gia đình 4 người, nếu họ phát ra tiếng động.', 'https://www.youtube.com/embed/0hLoZ20qTM8', 'Sắp Chiếu'),
(28, 'BLACK WIDOW', 'Cate Shortland', 'Scarlett Johansson, Florence Pugh, Rachel Weisz', 'Hành Động, Phiêu Lưu', '2020-10-30', '91 phút', 'Tiếng Anh - Phụ đề Tiếng Việt', 'C16 - Phim cấm khán giả dưới 16 tuổi', '../images/movie/black-widow.jpg', 'Phần phim riêng của Natasha Romanoff bất ngờ tung teaser chính thức với những cảnh hành động mãn nhãn, mang đậm chất điệp viên. Bên cạnh đó, phần phim này cũng sẽ hé lộ quá khứ đen tối và quá trình biến cô trở thành một Black Widow.', 'https://www.youtube.com/embed/D0sq0FqwV_E', 'Sắp Chiếu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ten_film` text DEFAULT NULL,
  `tenrap` text DEFAULT NULL,
  `ngaymuave` date DEFAULT NULL,
  `gio_chieu` time DEFAULT NULL,
  `tongtien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `history`
--

INSERT INTO `history` (`id`, `email`, `ten_film`, `tenrap`, `ngaymuave`, `gio_chieu`, `tongtien`) VALUES
(1, 'anhtruong6233@gmail.com', 'ÁC MỘNG KINH HOÀNG', 'CGV Saigonres Nguyễn Xí', '2020-05-06', '20:50:00', 100000),
(2, 'anhtruong6233@gmail.com', 'BÀ HOÀNG NÓI DỐI', 'CGV Liberty Citypoint', '2020-05-03', '20:50:00', 600000),
(3, 'anhtruong6233@gmail.com', 'BLOODSHOT', 'CGV Sư Vạn Hạnh', '2020-05-02', '20:45:00', 50000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rap`
--

CREATE TABLE `rap` (
  `id` int(11) NOT NULL,
  `tinh_tp` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `ten_rap` varchar(40) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rap`
--

INSERT INTO `rap` (`id`, `tinh_tp`, `ten_rap`) VALUES
(1, 'Hồ Chí Minh', 'CGV Hùng Vương Plaza'),
(2, 'Hồ Chí Minh', 'CGV Vivo City'),
(3, 'Hồ Chí Minh', 'CGV Trường Sơn (CGV CT Plaza)'),
(4, 'Hồ Chí Minh', 'CGV Hoàng Văn Thụ'),
(5, 'Hồ Chí Minh', 'CGV Sư Vạn Hạnh'),
(7, 'Hồ Chí Minh', 'CGV Giga Mall Thủ Đức'),
(8, 'Hồ Chí Minh', 'CGV Crescent Mall'),
(9, 'Hồ Chí Minh', 'CGV Pearl Plaza'),
(10, 'Hồ Chí Minh', 'CGV Pandora City'),
(11, 'Hồ Chí Minh', 'CGV Aeon Bình Tân'),
(12, 'Hồ Chí Minh', 'CGV IMC Trần Quang Khải'),
(13, 'Hồ Chí Minh', 'CGV Lý Chính Thắng'),
(14, 'Hồ Chí Minh', 'CGV Thảo Điền Pearl'),
(15, 'Hồ Chí Minh', 'CGV Liberty Citypoint'),
(16, 'Hồ Chí Minh', 'CGV Aeon Tân Phú'),
(17, 'Hồ Chí Minh', 'CGV Saigonres Nguyễn Xí'),
(18, 'Hồ Chí Minh', 'CGV Vincom Center Landmark 81'),
(19, 'Hồ Chí Minh', 'CGV Vincom Thủ Đức'),
(20, 'Hồ Chí Minh', 'CGV Vincom Đồng Khởi'),
(21, 'Hồ Chí Minh', 'CGV Vincom Gò Vấp'),
(22, 'Hồ Chí Minh', 'CGV Parkson Đồng Khởi'),
(23, 'Hồ Chí Minh', 'CGV Satra Củ Chi'),
(24, 'Hà Nội', 'CGV Vincom Center Bà Triệu'),
(25, 'Hà Nội', 'CGV Vincom Nguyễn Chí Thanh'),
(26, 'Hà Nội', 'CGV Hà Nội Centerpoint'),
(27, 'Hà Nội', 'CGV Mac Plaza (Machinco)'),
(28, 'Hà Nội', 'CGV Vincom Bắc Từ Liêm'),
(29, 'Hà Nội', 'CGV Vincom Trần Duy Hưng'),
(30, 'Hà Nội', 'CGV Mipec Tower'),
(31, 'Hà Nội', 'CGV Indochina Plaza Hà Nội'),
(32, 'Hà Nội', 'CGV Vincom Royal City'),
(33, 'Hà Nội', 'CGV Trương Định Plaza'),
(34, 'Hà Nội', 'CGV Vincom Metropolis Liễu Giai'),
(35, 'Hà Nội', 'CGV Aeon Hà Đông'),
(36, 'Hà Nội', 'CGV Hồ Gươm Plaza'),
(37, 'Hà Nội', 'CGV Rice City'),
(38, 'Hà Nội', 'CGV Vincom Times City'),
(39, 'Hà Nội', 'CGV Tràng Tiền Plaza'),
(40, 'Hà Nội', 'CGV Xuân Diệu'),
(41, 'Hà Nội', 'CGV Aeon Long Biên'),
(42, 'Hà Nội', 'CGV Artemis Hà Nội'),
(43, 'Hà Nội', 'CGV Vincom Long Biên'),
(44, 'Hà Nội', 'CGV Sun Grand Lương Yên'),
(45, 'Hà Nội', 'CGV Vincom Sky Lake Phạm Hùng'),
(46, 'Đà Nẵng', 'CGV Vĩnh Trung Plaza'),
(47, 'Đà Nẵng', 'CGV Vincom Đà Nẵng'),
(48, 'Cần Thơ', 'CGV Sense City'),
(49, 'Cần Thơ', 'CGV Vincom Xuân Khánh'),
(50, 'Cần Thơ', 'CGV Vincom Hùng Vương');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suatchieu`
--

CREATE TABLE `suatchieu` (
  `id` int(11) NOT NULL,
  `gio_chieu` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `suatchieu`
--

INSERT INTO `suatchieu` (`id`, `gio_chieu`) VALUES
(1, '15:40:00'),
(2, '16:15:00'),
(3, '17:40:00'),
(4, '19:40:00'),
(5, '20:45:00'),
(6, '20:50:00'),
(7, '21:15:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `hoten` text NOT NULL,
  `sdt` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `matkhau` text NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` text NOT NULL,
  `tinhtp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`hoten`, `sdt`, `email`, `matkhau`, `ngaysinh`, `gioitinh`, `tinhtp`) VALUES
('Trương Quế Anh', '0337596233', 'anhtruong6233@gmail.com', '123', '2000-09-27', 'Nữ', 'An Giang'),
('Nguyễn Trần Lan Chi', '0337596233', 'chi.rua.39@gmail.com', '123', '2000-12-23', 'Nữ', 'Thành Phố Hồ Chí Minh'),
('Trần Thảo Nguyên', '0337596233', 'nguyentran@gmail.com', '123', '2000-11-06', 'Nữ', 'Lâm Đồng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rap`
--
ALTER TABLE `rap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `rap`
--
ALTER TABLE `rap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `suatchieu`
--
ALTER TABLE `suatchieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
