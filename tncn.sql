-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2024 lúc 08:04 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tncn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin', '123654');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chatbox`
--

CREATE TABLE `chatbox` (
  `chatbox_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chatbox`
--

INSERT INTO `chatbox` (`chatbox_id`, `user_id`, `admin_id`, `created_at`) VALUES
(1, 1, 1, '2024-10-08 10:05:51'),
(2, 1, 1, '2024-10-08 10:08:44'),
(3, 1, 1, '2024-10-08 10:08:44'),
(4, 1, 1, '2024-10-08 10:08:44'),
(5, 1, 1, '2024-10-08 10:08:44'),
(6, 1, 1, '2024-10-08 10:08:44'),
(7, 1, 1, '2024-10-08 10:08:44'),
(8, 1, 1, '2024-10-08 10:08:44'),
(9, 1, 1, '2024-10-08 10:08:44'),
(10, 1, 1, '2024-10-08 10:08:44'),
(11, 1, 1, '2024-10-08 10:08:44'),
(12, 1, 1, '2024-10-08 10:08:44'),
(13, 1, 1, '2024-10-08 10:08:44'),
(14, 1, 1, '2024-10-08 10:08:44'),
(15, 1, 1, '2024-10-08 10:08:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mucluc`
--

CREATE TABLE `mucluc` (
  `mucluc_id` int(11) NOT NULL,
  `chatbox_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mucluc`
--

INSERT INTO `mucluc` (`mucluc_id`, `chatbox_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 5, '<h1>1. Đảng ủy trường</h1>', '<p>\"Đảng Cộng sản Việt Nam- Đội tiên phong của giai cấp công nhân, đồng thời là đội tiên phong của nhân dân lao động và của dân tộc Việt Nam, đại biểu trung thành lợi ích của giai cấp công nhân, nhân dân lao động và của cả dân tộc, lấy chủ nghĩa Mác- Lê nin và tư tưởng Hồ Chí Minh làm nền tảng tư tưởng là lực lượng lãnh đạo Nhà nước và xã hội…” (Điều 4, Hiến pháp 2013).<br><br>\r\n\r\n                Đảng bộ Trường Đại học Phenikaa trực thuộc Đảng bộ Khối các Trường Đại học, Cao đẳng Hà Nội, được thành lập trên cơ sở từ Chi bộ Trường Đại học Phenikaa, theo Quyết định số 3917-QĐ/ĐUK, ngày 20 tháng 3 năm 2020, của Đảng bộ Khối các Trường Đại học, Cao đẳng Hà Nội. <br><br>\r\n                \r\n                Trong quá trình học tập và rèn luyện tại Trường Đại học Phenikaa, những sinh viên có kết quả học tập và rèn luyện tốt, có phẩm chất đạo đức tốt và mong muốn được đứng vào hàng ngũ của Đảng, sẽ được Đoàn Thanh niên Trường giới thiệu để Chi bộ, Đảng ủy Trường xem xét bồi dưỡng, đề xuất Đảng bộ Khối các Trường Đại học, Cao đẳng Hà Nội xét kết nạp vào Đảng.<br><br>\r\n                \r\n                *Sinh viên mới nhập học là đảng viên cần nộp hồ sơ đảng viên tại Văn phòng Đảng ủy Trường ngay sau khi nhập học.<br><br>\r\n                \r\n                CÁCH THỨC NỘP HỒ SƠ CHUYỂN SINH HOẠT ĐẢNG<br><br>\r\n                \r\n                Bước 1: Sinh viên mang hồ sơ Đảng nhận từ Đảng bộ địa phương đến:<br><br>\r\n                \r\n                Đảng uỷ Khối các Trường Đại học và Cao đẳng Hà Nội<br><br>\r\n                \r\n                Địa chỉ: Nhà 2C, Tầng 1 (Nơi chuyển sinh hoạt Đảng)<br><br>\r\n                \r\n                Số 219 Trần Phú - Quận Hà Đông- Thành phố Hà Nội<br><br>\r\n                \r\n                (Nơi chuyển sinh hoạt đến: Đảng bộ Trường Đại học Phenikaa- trực thuộc Đảng uỷ Khối các Trường Đại học Cao đẳng Hà Nội)<br><br>\r\n                \r\n                Bước 2: Mang hồ sơ đã được Đảng uỷ Khối phê duyệt (có dấu niêm phong) đến Văn phòng Đảng Đoàn Trường Đại học Phenikaa<br><br>\r\n                \r\n                Địa điểm: Văn phòng Đảng Đoàn-Tầng 4, Nhà A9, Trường Đại học Phenikaa<br><br>\r\n                \r\n                Phụ trách: TS. Nguyễn Thị Bích Thủy- ĐT: 0989125552<br><br>\r\n                \r\n                Email: dangbo@phenikaa-uni.edu.vn</p><br>', '2024-10-08 10:24:21', NULL),
(2, 6, '<h1>2. Đoàn thanh niên trường</h1>', '\r\n            <p>\r\n                Đoàn Thanh niên là tổ chức chính trị - xã hội của thanh niên, sinh viên; tập hợp đoàn kết rộng rãi thanh\r\n                niên cùng phấn đấu học tập, rèn luyện vì mục tiêu, lý tưởng của Đảng Cộng sản Việt Nam. Đoàn thanh niên\r\n                đã và đang ngày càng phát triển lớn mạnh, là tổ chức uy tín góp phần quan trọng vào quá trình công\r\n                nghiệp hóa, hiện đại hóa đất nước, quá trình xây dựng đội ngũ thanh niên giàu lòng yêu nước, đạo đức,\r\n                năng lực, bản lĩnh. Tại Trường Đại học Phenikaa, Đoàn viên thanh niên đặc biệt phát huy vai trò của\r\n                mình, là đơn vị xuất sắc trong công tác Đoàn và phong trào thanh niên Thành phố Hà Nội. Nhiệm kỳ 2022 -\r\n                2024, BCH Đoàn trường có 19 UV Ban chấp hành.<br><br>\r\n\r\n                Thông tin liên hệ:<br><br>\r\n\r\n                Địa chỉ Văn phòng Đoàn: Phòng 101 – Nhà thi đấu đa năng C1<br><br>\r\n\r\n                Bí thư Đoàn trường: ThS. Nguyễn Thị Khánh Trà<br><br>\r\n\r\n                Email: doanthanhnien@phenikaa-uni.edu.vn<br><br>\r\n\r\n                Đọc xong các thông tin về học tập rèn luyện, tin chắc rằng sẽ có hàng vạn câu hỏi xuất hiện trong suy\r\n                nghĩ của các bạn, trong đó không thể thiếu nội dung vậy làm sao để có thể học tập tốt, rèn luyện tốt hay\r\n                thành công đúng chuẩn “con nhà người ta” khi học Đại học.<br><br>\r\n\r\n                Đừng lo, đừng lo… chúng mình sẽ dành tặng các bạn 1001 cách để thành công khi học đại học, hãy đọc ngay\r\n                những nội dung này và cũng đừng quên khám phá đời sống bạn bè, tình yêu, vui chơi trong phần 3 này nhé.\r\n                <br><br>\r\n            </p>', '2024-10-08 10:25:47', NULL),
(3, 7, '<h1>3. Phong trào sinh viên 5 tốt</h1>', '<p>\r\n                Sinh viên 5 Tốt là một phong trào lớn của sinh viên trên cả nước; đây là danh hiệu sinh viên uy tín, là\r\n                minh chứng cho sự nổ lực, cố gắng của mỗi cá nhân sinh viên để rèn luyện và hoàn thiện bản thân.\r\n                Sinh viên 5 Tốt gồm có 5 tiêu chí: “Học tập tốt”, “Đạo đức tốt”, “Tình nguyện tốt”, “Thể lực tốt” và\r\n                “Hội nhập tốt”.</p><br>\r\n\r\n            <p>Tại Trường Đại học Phenikaa, phong trào Sinh viên 5 Tốt do Đoàn Thanh niên trường phát động.\r\n                Để đạt được danh hiệu này, sinh viên cần bám sát các tiêu chí và phấn đấu rèn luyện bản thân xuyên suốt\r\n                năm học. Hằng năm, Đoàn Thanh niên trường tổ chức chuỗi các hoạt động “Ngày hội Sinh viên 5 Tốt” để tăng\r\n                cường nhận thức và tạo cơ hội cho sinh viên tham gia, tích lũy minh chứng.\r\n            </p>', '2024-10-08 10:26:59', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyche`
--

CREATE TABLE `quyche` (
  `quyche_id` int(11) NOT NULL,
  `chatbox_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quyche`
--

INSERT INTO `quyche` (`quyche_id`, `chatbox_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, '<h1>1. Hoạt động đào tạo tại trường đại học Phenikaa</h1>', '<h2>1.1 Chương trình đào tạo bậc đại học?</h2><br><br>\r\n\r\n            <p>1.1.1 Chương trình đào tạo bậc đại học được xây dựng theo đơn vị tín chỉ, cấu trúc từ các môn học hoặc\r\n                học phần (sau đây gọi là học phần), trong đó mỗi học phần bắt buộc sẽ được phân loại vào các nhóm thuộc\r\n                chương trình đào tạo theo quy định hiện hành của Bộ Giáo dục và Đào tạo. Trường hợp đào tạo song ngành\r\n                hoặc đào tạo ghép ngành - ngành phụ, chương trình đào tạo phải thể hiện rõ khối lượng học tập tương ứng\r\n                với từng chương trình.</p><br>\r\n            <p>1.1.2 Nội dung, chuẩn đầu ra của chương trình đào tạo áp dụng chung đối với các hình thức đào tạo, phương\r\n                thức tổ chức đào tạo và đối tượng đào tạo khác nhau; các học phần có thể được điều chỉnh để phù hợp với\r\n                từng đối tượng khác nhau nhưng về cơ bản không được phép thay đổi quá 20% so với khối lượng tín chỉ đã\r\n                xác định trước.</p><br>\r\n            <p>1.1.3 Chương trình đào tạo phải đáp ứng đầy đủ và kịp thời các yêu cầu của ngành nghề và xã hội. Đối với\r\n                sinh viên đã hoàn thành chương trình đào tạo và được công nhận tốt nghiệp, cần phải đảm bảo rằng thời\r\n                gian đào tạo không vượt quá mức quy định hiện hành.</p><br>\r\n            <p>1.1.4 Mỗi hình thức đào tạo, chương trình đào tạo có kế hoạch học tập chuẩn toàn khóa đã định hướng cho\r\n                sinh viên.</p><br>\r\n            <p> a) Thời gian học tập chuẩn toàn khóa không vượt quá 20% so với thời gian học tập chuẩn toàn khóa của mỗi\r\n                ngành. Đối với sinh viên làm việc bán thời gian hoặc có lý do chính đáng, thời gian học tập có thể điều\r\n                chỉnh để phù hợp với thời gian học chính thức.</p><br>\r\n            <p> b) Thời gian theo kế hoạch học tập chuẩn toàn khoá đối với hình thức đào tạo vừa làm vừa học dài hơn tối\r\n                thiểu 20% so với hình thức đào tạo chính quy của cùng chương trình đào tạo.</p><br>\r\n            <p>1.1.5 Thời gian tối đa để sinh viên hoàn thành khóa học không vượt quá 02 (hai) lần thời gian theo kế\r\n                hoạch học tập chuẩn toàn khoá đối với mỗi hình thức đào tạo. Đối với sinh viên học liên thông đã được\r\n                miễn trừ khối lượng tín chỉ tích lũy, thời gian tối đa để sinh viên hoàn thành khóa học được xác định\r\n                trên cơ sở thời gian theo kế hoạch học tập chuẩn toàn khóa giảm tương ứng với khối lượng được miễn trừ.\r\n            </p><br>', '2024-10-08 10:09:22', NULL),
(2, 2, '<h1>2. Hoạt động công tác sinh viên</h1>', '<h2>2.1 Hỗ trợ hành chính 1 cửa, quản lý thông tin sinh viên</h2><br><br>\r\n            <p>2.1.1 Dịch vụ hỗ trợ hành chính 1 cửa: Phòng CTSV sẽ hỗ trợ giải quyết các thủ tục hành chính, các biểu\r\n                mẫu (đơn, giấy xác nhận…), sinh viên có thể cập nhật các biểu mẫu tại website:\r\n                https://phenikaa-uni.edu.vn/ à chọn mục Sinh viên à Hoạt động sinh viên à Xác nhận thủ tục giấy tờ.\r\n                Quản lý thông tin sinh viên: Phòng CTSV quản lý thông tin dữ liệu sinh viên theo quá trình (nhập học,\r\n                trong quá trình học và trở thành cựu sinh viên).\r\n                Ngay khi nhập học, mỗi sinh viên sẽ cần cập nhật bản khai sơ yếu lý lịch online và offline đầy đủ các\r\n                thông tin về bản thân, gia đình theo hướng dẫn của Phòng Công tác sinh viên.\r\n                Vào mỗi cuối kỳ học Phòng CTSV sẽ rà soát thông tin, sinh viên có thay đổi về nơi ở, số điện thoại, các\r\n                thông tin cá nhân khác sẽ cần khai báo đầy đủ vào các đợt rà soát thông tin này.</p><br>\r\n            <p>2.1.2 Cố vấn học tập (CVHT) là những giảng viên có đủ phẩm chất, có trình độ chuyên môn cao, có kinh\r\n                nghiệm trong giảng dạy và nghiên cứu khoa học (NCKH), có lòng yêu nghề và tâm huyết với sự nghiệp giáo\r\n                dục đào tạo, hiểu quy chế đào tạo của Nhà trường.\r\n                CVHT tư vấn cho sinh viên về chương trình đào tạo, cách thức xây dựng kế hoạch học tập cho toàn khóa học\r\n                đảm bảo phù hợp với năng lực và hoàn cảnh của sinh viên; đăng ký học phần của sinh viên; phương pháp học\r\n                tập và NCKH, tư vấn hướng nghiệp và việc làm cho sinh viên.</p><br>\r\n            <p>2.1.3 Học bổng khuyến khích học tập, rèn luyện, khen thưởng, kỷ luật sinh viên: <br><br>\r\n                - Đối tượng:<br><br>\r\n                Sinh viên đại học hệ chính quy đang học tập tại thời điểm xét học bổng khuyến khích học tập (KKHT) nếu\r\n                có đủ các điều kiện sau thì được xem xét, cấp học bổng KKHT và có kết quả học tập, rèn luyện đạt từ loại\r\n                khá trở lên;<br><br>\r\n                + Đã nộp đầy đủ và đúng hạn học phí của học kỳ xét học bổng;<br><br>\r\n\r\n                + Không bị kỷ luật từ mức khiển trách trở lên trong năm xét học bổng KKHT<br><br>\r\n\r\n                + Sinh viên không thuộc đối tượng nhận học bổng Tân sinh viên, học bổng tài trợ của các tổ chức khác\r\n                trong đợt xét học bổng<br><br>\r\n\r\n                + Số tín chỉ học phần lần đầu đăng ký học và thi trong năm học phải tối thiểu là 24 tín chỉ, hoặc bằng\r\n                số tín chỉ tối đa quy định cho ngành/chương trình đào tạo (CTĐT) đó ở mỗi năm học.<br><br>\r\n\r\n                + Điểm xét học bổng KKHT là điểm trung bình chung học tập của năm học, chỉ tính điểm lần thi thứ nhất và\r\n                không có học phần nào bị điểm F, tương đương với việc không có học phần phải học lại.<br><br>\r\n\r\n                + Với sinh viên cuối khoá sẽ không áp dụng mức tín chỉ tối thiểu mà dựa trên số tín chỉ thực tế của\r\n                ngành/CTĐT để xét học bổng KKHT.<br><br> Sinh viên học song song hai chương trình được tham gia xét ở\r\n                chương trình thứ nhất hoặc cả hai chương trình nếu có kết quả học tập, rèn luyện ở cả hai chương trình\r\n                đều đáp ứng các yêu cầu.<br><br>\r\n            <p>2.1.4 Đánh giá điểm rèn luyện: <br><br>\r\n                Sau mỗi kỳ học, Nhà trường tiến hành đánh giá kết quả rèn luyện của sinh viên tại website:\r\n                https://ctsv.phenikaa-uni.edu.vn/.Kết quả đánh giá rèn luyện của sinh viên sẽ được sử dụng với các mục\r\n                đích sau:<br><br>\r\n\r\n                1. Kết quả đánh giá rèn luyện của sinh viên được sử dụng trong việc xét duyệt học bổng, xét khen thưởng\r\n                - kỷ luật, xét thôi học, ngừng học (bảo lưu), xét lưu trú ký túc xá.<br><br>\r\n\r\n                2. Kết quả đánh giá rèn luyện toàn khóa học được ghi chung vào bảng điểm kết quả học tập và lưu trong hồ\r\n                sơ của người học khi tốt nghiệp ra Trường.<br><br>\r\n\r\n                3. Sinh viên có kết quả rèn luyện xuất sắc được Nhà trường xem xét biểu dương, khen thưởng.<br><br>\r\n\r\n                4. Sinh viên bị xếp loại rèn luyện yếu, kém trong hai học kỳ liên tiếp thì phải tạm ngừng học ít nhất\r\n                một học kỳ tiếp theo và nếu bị xếp loại rèn luyện yếu, kém hai học kỳ liên tiếp lần thứ hai thì sẽ buộc\r\n                thôi học.\r\n            </p><br><br>', '2024-10-08 10:18:25', NULL),
(3, 3, '<h1>3. Hoạt động Trung tâm Tư vấn Hỗ trợ và Đổi mới sáng tạo sinh viên</h1>', '<h2>3.1 Hợp tác Doanh nghiệp, hướng nghiệp, cơ hội thực tập việc làm, hỗ trợ thực tập</h2><br><br>\r\n            <p>3.1.1 Dịch vụ hỗ trợ hành chính 1 cửa:\r\n\r\n                Trung tâm Tư vấn, Hỗ trợ và Đổi mới sáng tạo sinh viên là đơn vị đầu mối, cùng với các đơn vị tổ chức\r\n                các chương trình hướng nghiệp, tìm kiếm các cơ hội thực tập và triển khai các chương trình hợp tác doanh\r\n                nghiệp nhằm giúp sinh viên phát triển kỹ năng nghề nghiệp của bản thân.<br><br>\r\n\r\n                3.1.2 Các hoạt động Hợp tác doanh nghiệp: <br><br>\r\n\r\n                Tư vấn hướng nghiệp, việc làm 1:1 <br><br>\r\n\r\n                Tổ chức các sự kiện hướng nghiệp theo chương trình đào tạo, theo khoa. <br><br>\r\n\r\n                Tổ chức các khóa đào tạo kỹ năng tìm việc. <br><br>\r\n\r\n                Tổ chức các buổi hội thảo tuyển dụng, chương trình Ngày hội việc làm hàng năm <br><br>\r\n\r\n                Kết nối các cơ hội việc làm thêm, thực tập, việc làm toàn thời gian. <br><br>\r\n\r\n                Kết nối cơ hội học bổng doanh nghiệp bằng tài trợ hiện kim hoặc các tài trợ học bổng, hiện vật. <br><br>\r\n\r\n                3.1.3 Các kênh cập nhật thông tin hợp tác doanh nghiệp:<br><br>\r\n\r\n                Truy cập Fanpage để cập nhật thông tin, sự kiện hướng nghiệp và bản tin tuyển dụng hàng tuần:\r\n                https://www.facebook.com/tvhtsvphenikaauni/ <br><br>\r\n\r\n                Truy cập Cổng thông tin việc làm để cập nhật các việc làm mới nhất và tạo CV chuyên nghiệp:\r\n                https://job.phenikaa-uni.edu.vn/<br><br>\r\n            </p>\r\n            <h2>3.2 Hoạt động tham vấn tâm lý</h2><br><br>\r\n            <p> 3.2.1 Hoạt động tham vấn tâm lý bao gồm các hoạt động tham vấn/tư vấn các vấn đề khó khăn về sức khỏe\r\n                tâm lý, học tập, cải thiện phương pháp học tập, xây dựng động lực học tập đúng đắn, định hướng phát\r\n                triển bản thân, thái độ ứng xử phù hợp trong các mối quan hệ xã hội...cho sinh viên. Hoạt động tham vấn\r\n                tâm lý nhằm giúp sinh viên tăng cường các kỹ năng và năng lực cần thiết liên quan đến giá trị cốt lõi,\r\n                khai phá tiềm năng, định hướng các kế hoạch phát triển góp phần ổn định sức khỏe tinh thần để học tập và\r\n                rèn luyện đạt kết quả tốt. <br><br>\r\n\r\n                Hoạt động tham vấn tâm lý vận hành theo 05 nguyên tắc: <br><br>\r\n\r\n                1. Lấy sinh viên làm trọng tâm; <br><br>\r\n\r\n                2. Tôn trọng không phán xét và lắng nghe chân thành;<br><br>\r\n\r\n                3. Bảo mật thông tin;<br><br>\r\n\r\n                4. Đồng hành cùng tìm ra giải pháp;<br><br>\r\n\r\n                5. Chuyên nghiệp trong từng giai đoạn.<br><br><br>\r\n\r\n\r\n                3.2.2 Thông điệp của hoạt động Tham vấn Tâm lý học đường:<br><br>\r\n                \"Open your mind, find your way\" - \"Cùng mở lòng, cùng gỡ rối\".<br><br>\r\n\r\n                Đến với hoạt động tham vấn tâm lý, sinh viên sẽ được bày tỏ, chia sẻ những tâm tư thầm kín, vướng mắc,\r\n                lo âu trong cuộc sống, những khó khăn trong học tập. Đồng thời, sinh viên còn có cơ hội được giúp đỡ các\r\n                bạn sinh viên gặp khó khăn khác.\r\n\r\n            </p>', '2024-10-08 10:20:12', NULL),
(4, 4, '<h1>4. Trung tâm Thông tin - Thư viện</h1>', '<h2> 4.1 Thông tin </h2><br>\r\n            <p>4.1.1 Trung tâm thông tin thư viện Đại học Phenikaa là nơi hỗ trợ học tập / nghiên cứu / đổi mới / khởi\r\n                nghiệp (Learn - Study / Research / Innovate / StartUp); phát sinh ý tưởng mới (Ideas); giao lưu, hợp\r\n                tác, kết nối, chia sẻ học thuật (Collaborate – Connect - Sharing); là nơi truyền cảm hứng nghiên cứu,\r\n                sáng tạo (Inspire, Create).<br><br>\r\n                Trung tâm TTTV Phenikaa Uni được định hướng theo mô hình Learning Commons. <br><br>\r\n\r\n                Đây là một không gian giáo dục, tương tự như thư viện và lớp học trong đó có các không gian và hạ tầng\r\n                thiết bị phục vụ việc đọc, nghiên cứu, tự học, làm việc nhóm, sáng tạo, gặp gỡ, hay đơn thuần chỉ là thư\r\n                giãn... Learning commons là sự kết hợp giữa thư viện với công nghệ thông tin và các dịch vụ hỗ trợ học\r\n                tập nhằm cung cấp những dịch vụ tốt nhất đáp ứng được tối đa các nhu cầu của người dùng. Người dùng có\r\n                thể tự tra cứu, học, đọc tài liệu hoặc nghiên cứu, thảo luận về các vấn đề quan tâm, hoặc đơn giản chỉ\r\n                là nghỉ ngơi, thư giãn.<br><br>\r\n\r\n                4.1.2 Trung tâm Thông tin - Thư viện ứng dụng và triển khai phần mềm quản trị thư viện điện tử Koha, Thư\r\n                viện số Dspace, cổng thông tin Thư viện, áp dụng các tiêu chuẩn quốc tế về mô tả biên mục AACR2,\r\n                DublinCore, khung phân loại DDC, để nâng cao hiệu quả hoạt động thông tin thư viện, kết nối, hợp tác,\r\n                chia sẻ tài nguyên với các Trung tâm Thông tin – Thư viện của các trường đại học trong nước và các cơ sở\r\n                dữ liệu quốc tế.<br><br>\r\n\r\n                Hơn 52.000 tài liệu in và ~8000 tài liệu số - 7 cơ sở dữ liệu khoa học trực tuyến và rất nhiều các nguồn\r\n                học liệu mở - hoạt động lưu thông tài liệu trên nền tảng PC và Mobile với kết nối nhanh, giao diện thân\r\n                thiện, dễ sử dụng.<br><br>\r\n\r\n                4.1.3 Không gian bên trong Thư viện được thiết kế hiện đại, thân thiện và luôn hướng tới sự tiện nghi,\r\n                thoải mái cho người dùng. <br><br>\r\n\r\n                Kho sách mở để bạn đọc tự lựa chọn và các tiện ích Khu đa phương tiện, Phòng học nhóm, Phòng đọc Khóa\r\n                luận - Luận văn<br><br>\r\n\r\n                Không gian đọc sách mở với tổng diện tích gần 3.200m2 được thiết kế dọc các dãy hành lang chính thuộc 2\r\n                dãy tòa nhà chẵn - lẻ.<br><br>\r\n\r\n                Không gian đọc sách, nghiên cứu, học tập không bị gò bó trong các phòng đọc, bạn đọc có thể mượn tài\r\n                liệu và mang tài liệu tới Không gian mở để đọc một cách thoải mái với không gian tràn ngập ánh sáng, hòa\r\n                mình cũng thiên nhiên cây lá cũng như không bị giới hạn về thời gian.<br></p>\r\n\r\n            <h2> 4.2 Liên hệ </h2><br>\r\n            <p>\r\n                THÔNG TIN LIÊN HỆ TRUNG TÂM THÔNG TIN THƯ VIỆN<br><br>\r\n\r\n                Địa điểm: Tầng 4,5,6 Tòa A10<br>\r\n\r\n                Điện thoại: 024.6291.8118 Máy lẻ 117<br>\r\n\r\n                Email: library@phenikaa-uni.edu.vn / elib@phenikaa-uni.edu.vn<br><br>\r\n\r\n\r\n\r\n                GIỜ MỞ CỬA:<br><br>\r\n\r\n                TẦNG 4, 5 A10 : TỪ THỨ 2 – THỨ 6<br>\r\n\r\n                SÁNG 08H00-12H00; CHIỀU TỪ 13H00-17H00<br>\r\n\r\n                TẦNG 6 KHU TỰ HỌC : TỪ THỨ 2 ĐẾN CHỦ NHẬT<br>\r\n\r\n                THỜI GIAN: 06H30 – 22H00<br><br>\r\n\r\n\r\n\r\n                CÁC ĐƯỜNG LINK TRUY CẬP:<br><br>\r\n\r\n                Cổng thông tin thư viện: http://library.phenikaa-uni.edu.vn<br>\r\n\r\n                Thư viện điện tử: http://elib.phenikaa-uni.edu.vn<br>\r\n\r\n                Thư viện số: http://dlib.phenikaa-uni.edu.vn<br>\r\n\r\n                Ứng dụng di động Thư viện PU-LIC: https://library.phenikaa-uni.edu.vn/node/383<br>\r\n            </p>', '2024-10-08 10:21:59', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `success`
--

CREATE TABLE `success` (
  `success_id` int(11) NOT NULL,
  `chatbox_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `success`
--

INSERT INTO `success` (`success_id`, `chatbox_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 8, '<h1>1. Lập kế hoạch học tập cá nhân</h1>', '\r\n            <p>Liệu bạn có thắc mắc tại sao nhiều người nói rằng cuộc sống đại học rất tự do thoải mái, nhưng cũng có nhiều người nói rằng học tập ở đại học rất mệt mỏi? \r\n                Trên thực tế, cả hai thái cực này lại là hệ quả của cùng một nguyên nhân. \r\n                Nguyên nhân ấy chính là điểm khác biệt giữa đại học và trung học phổ thông, có thể tóm gọn là: Ở đại học, bạn được coi là một người trưởng thành. \r\n                Khi được coi là một người trưởng thành, bạn được trao quyền quyết định các hành động của mình. Bạn có quyền lựa chọn giữa học hay tham gia các cuộc chơi. \r\n                Tuy nhiên, cũng chính vì khi được coi là một người trưởng thành, bạn lại được kỳ vọng là một người biết cách tự học, tự nghiên cứu, tự biết cách sắp xếp thời gian của bản thân hợp lý. </p><br>\r\n\r\n                <p>BẠN CẦN TỰ THIẾT KẾ THỜI GIAN BIỂU CỦA CHÍNH MÌNH !<br><br></p>\r\n\r\n                <p>Thay vì tuân theo một thời khóa biểu cố định như ở trung học phổ thông, ở đại học bạn cần tự lên kế hoạch và chọn các môn học mình sẽ tham gia. \r\n                Điều này có thể tạo nên nhiều bỡ ngỡ và khó khăn cho các bạn lần đầu đăng ký vì trên thực tế, đăng ký môn học yêu cầu một quá trình nhiều công đoạn. <br><br></p>\r\n                \r\n                <p>Đầu tiên, bạn cần để tâm đến lịch đăng ký môn và đặc biệt là hạn đăng ký. \r\n                Nếu bạn bỏ lỡ quãng thời gian đăng ký môn học này, bạn sẽ có một kỳ “thất học” vì không được tham gia bất kỳ môn học nào. \r\n                Để tránh điều đáng tiếc như vậy xảy ra, bạn nên thường xuyên theo dõi các trang thông tin của trường và tạo sự kiện nhắc nhở trên thiết bị di động sau khi nắm bắt được thông tin đăng ký môn học. <br><br></p>\r\n                \r\n                <p>Thứ hai, bạn cần biết ngành học của mình yêu cầu học những môn gì. Thông tin này có thể tìm kiếm trên website của viện/khoa hoặc được cung cấp khi bạn mới vào trường. \r\n                Điều này có nghĩa là tùy vào sự sắp xếp của bạn, thời gian học đại học của mỗi người có thể sớm hơn hoặc muộn hơn thời gian dự kiến. Tuy nhiên, vào kỳ học đầu tiên bạn nên đăng ký khối lượng vừa phải để trải nghiệm áp lực học tập như vậy là nặng hay nhẹ so với khả năng của bản thân. Khối lượng vừa phải có thể hiểu là khối lượng môn học trung bình mỗi kỳ sao cho sau khi học xong số năm mà trường công bố bạn có thể ra trường. Thông thường, phòng đào tạo sẽ công bố thời khóa biểu tất cả các môn học trong trường trước khi cổng đăng ký được mở khoảng một đến hai tháng. Bạn có thể dựa vào đó để sắp xếp một thời khóa biểu hợp với nhu cầu của bản thân.<br><br></p>', '2024-10-08 10:28:23', NULL),
(2, 9, '<h1>2. Kỹ năng tự học</h1>', '<p>Ở đại học, sinh viên được kỳ vọng có khả năng tự học cao. Để có thể học tập tốt một môn học, bạn vẫn cần chuẩn bị bài, học bài trên lớp, và làm bài tập về nhà, tuy nhiên sẽ không ai đốc thúc và kiểm tra bạn những điều này ở đại học. \r\n                Rất nhiều sinh viên vì buông lỏng các bước thiết yếu mà cảm thấy đuối sức. \r\n                Không phải vì môn học ở đại học khó hơn rất nhiều, mà chính vì bạn đã không làm đủ các yêu cầu tối thiểu để có thể nắm rõ một môn học.</p><br>\r\n\r\n              <p>Sẽ rất tốt nếu bạn giữ được thói quen học tập đúng và đủ giờ.\r\n                Hãy đặt một khoảng thời gian trong ngày làm thời gian tự học và các công việc khác không được xen ngang. \r\n                Và hãy thử nhiều địa điểm học tập khác nhau cho đến khi bạn quyết định được chỗ nào giúp bạn có được hiệu suất học tập tốt nhất. \r\n                Bạn cũng có thể đạt được hiệu quả học tập tốt hơn khi học một mình hoặc học theo nhóm, hãy thử và quyết định. </p><br>\r\n\r\n               <p>Kỹ năng tự học gắn bó mật thiết với kỹ năng đọc hiểu. Hãy giữ thói quen luôn đọc và chuẩn bị bài trước ở nhà. \r\n                Khi đọc bài mới, bạn có thể không hiểu hết những gì viết trong giáo trình. \r\n                Tuy nhiên, khi đã có ý thức về những khái niệm, nội dung chính trong đầu, bạn sẽ dễ dàng bắt kịp những nội dung thầy cô giảng trên lớp. \r\n                Khi chuẩn bị bài, hãy dùng sách giáo trình cá nhân và một chiếc bút chì hoặc bút nhớ. \r\n                Gạch chân hoặc highlight những nội dung chính và những thứ bạn cho là quan trọng. \r\n                Việc này không những giúp bạn tăng độ tập trung, tăng tốc độ đọc, mà còn giúp tăng khả năng hiểu bài giảng trên lớp khi bạn đã nắm được mối liên kết giữa các nội dung chính. </p><br>\r\n\r\n                <p>Kỹ năng giải quyết các bài toán logic cũng được kỳ vọng cao khi học đại học, đặc biệt là những ngành khoa học - kỹ thuật. \r\n                    Thay vì được cung cấp từng bước giải bài toán như trung học phổ thông, bạn cần tự tìm cách giải các bài số học khi tham gia giảng đường đại học. \r\n                    Hãy dành thời gian nghiền ngẫm các bài tập giải sẵn trong giáo trình, trên giảng đường hoặc từ các quyển sách tham khảo khác.\r\n                     Bạn sẽ cần tìm ra quy luật từ các bài giải này. \r\n                     Tuy nhiên, việc này dễ dàng hơn rất nhiều so với việc tự tìm ra cách giải cho bản thân, bạn cũng có thể tự tìm ra cách giải mới nếu có thời gian. \r\n                     Sau khi hiểu được quy luật, hãy tự giải các bài tập mới trước khi đọc lời giải để tự kiểm tra khả năng của mình.</p><br>\r\n\r\n                <p>Ngoài việc học tập, bạn có thể làm nhiều hơn thế ở bậc đại học để chuẩn bị sẵn sàng cho cuộc sống sau khi ra trường. Bạn có thể tham gia hoạt động xã hội, tham gia nghiên cứu khoa học, hoặc gặt hái các kinh nghiệm làm việc ngay khi còn đang ngồi trên ghế nhà trường.\r\n            </p>', '2024-10-08 10:29:21', NULL),
(3, 10, '<h1>3. Tham gia hoạt động ngoại khóa</h1>', '<p> Một số hoạt động ngoại khóa dự kiến sẽ triển khai năm học 2024 - 2025<br><br>\r\n\r\n                <b>Các chương trình tình nguyện</b><br><br>\r\n\r\n                Chiến dịch Tình nguyện Mùa hè xanh;<br>\r\n\r\n                Chiến dịch tình nguyện Đông ấm;<br>\r\n\r\n                Chiến dịch Xuân tình nguyện “Xuân yêu thương – Tết sum vầy”;<br>\r\n\r\n                Các hoạt động tình nguyện tri ân anh hùng, liệt sĩ, người có công với cách mạng;<br>\r\n\r\n                Các hoạt động tình nguyện xung kích tại chỗ.<br><br>\r\n\r\n                <b>Một số chương trình, cuộc thi, hoạt động khác </b><br><br>\r\n\r\n                Club Day 2024 – Ngày hội các CLB;<br>\r\n\r\n                Ngày hội Sinh viên 5 Tốt (Đạo đức Tốt, Thể lực Tốt, Hội nhập Tốt, Học tập Tốt, Tình nguyện Tốt);<br>\r\n\r\n                Đại nhạc hội Chào Tân 2024;<br>\r\n\r\n                Cuộc thi tìm hiểu pháp luật Việt Nam;<br>\r\n\r\n                Các hoạt động về Trường học không rác;<br>\r\n\r\n                Miss and Mr Phenikaa;<br>\r\n\r\n                Tìm kiếm Tài năng MC;<br>\r\n\r\n                Liên hoan tuyên truyền ca khúc cách mạng;<br>\r\n\r\n                Tìm kiếm gương mặt Đại sứ thương hiệu;<br>\r\n\r\n                Hội thi Thủ lĩnh sinh viên 2025;<br>\r\n\r\n                Hội thao sinh viên 2025;<br>\r\n\r\n                Các hoạt động về nguồn, đi tìm địa chỉ đỏ...<br>\r\n\r\n                Các hoạt động khác...<br>\r\n            </p>', '2024-10-08 10:30:16', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'Nguyễn Văn A', 'nguyena@gmail.com', '123456a'),
(2, 'Đinh Văn B', 'dinhb@gmail.com', '123654b');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `chatbox`
--
ALTER TABLE `chatbox`
  ADD PRIMARY KEY (`chatbox_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Chỉ mục cho bảng `mucluc`
--
ALTER TABLE `mucluc`
  ADD PRIMARY KEY (`mucluc_id`),
  ADD KEY `chatbox_id` (`chatbox_id`);

--
-- Chỉ mục cho bảng `quyche`
--
ALTER TABLE `quyche`
  ADD PRIMARY KEY (`quyche_id`),
  ADD KEY `chatbox_id` (`chatbox_id`);

--
-- Chỉ mục cho bảng `success`
--
ALTER TABLE `success`
  ADD PRIMARY KEY (`success_id`),
  ADD KEY `chatbox_id` (`chatbox_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chatbox`
--
ALTER TABLE `chatbox`
  MODIFY `chatbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chatbox`
--
ALTER TABLE `chatbox`
  ADD CONSTRAINT `chatbox_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `chatbox_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Các ràng buộc cho bảng `mucluc`
--
ALTER TABLE `mucluc`
  ADD CONSTRAINT `mucluc_ibfk_1` FOREIGN KEY (`chatbox_id`) REFERENCES `chatbox` (`chatbox_id`);

--
-- Các ràng buộc cho bảng `quyche`
--
ALTER TABLE `quyche`
  ADD CONSTRAINT `quyche_ibfk_1` FOREIGN KEY (`chatbox_id`) REFERENCES `chatbox` (`chatbox_id`);

--
-- Các ràng buộc cho bảng `success`
--
ALTER TABLE `success`
  ADD CONSTRAINT `success_ibfk_1` FOREIGN KEY (`chatbox_id`) REFERENCES `chatbox` (`chatbox_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
