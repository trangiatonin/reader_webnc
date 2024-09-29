create database catgory_book;
use catgory_book;

create table author(
id int auto_increment primary key,
name varchar(255) not null,
description text
);
alter table ebook
add column book_update date;
select * from ebook;
delete from ebook;
insert into ebook ( book_title, book_img ,book_author, book_quantity, price, category, nxb, book_update)
values ( "Đập nồi bán sắt đi học", "https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/1/49435.jpg?v=1&w=350&h=510", "Hồng Thứ Bắc", 200, 2000, "Ngôn Tình", "Đang cập nhật", '2024-09-23');

insert into ebook (book_id, book_title, book_img ,book_author, book_quantity, price, category, nxb, book_update)
values ( 3,"Đập nồi bán sắt đi học", "https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/1/49435.jpg?v=1&w=350&h=510", "Hồng Thứ Bắc", 200, 2000, "Ngôn Tình", "Đang cập nhật", '2024-09-23'),
( 4,"Đập nồi bán sắt đi học", "https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/1/49435.jpg?v=1&w=350&h=510", "Hồng Thứ Bắc", 200, 2000, "Ngôn Tình", "Đang cập nhật", '2024-09-23'),
( 5,"Đập nồi bán sắt đi học", "https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/1/49435.jpg?v=1&w=350&h=510", "Hồng Thứ Bắc", 200, 2000, "Ngôn Tình", "Đang cập nhật", '2024-09-23'),
( 6,"Đập nồi bán sắt đi học", "https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/1/49435.jpg?v=1&w=350&h=510", "Hồng Thứ Bắc", 200, 2000, "Ngôn Tình", "Đang cập nhật", '2024-09-23');
select * from ebook;
UPDATE ebook
SET description = 'Trong giai đoạn huấn luyện chuẩn bị cho một giải đấu nào đó, cánh truyền thông lần lượt đến phỏng vấn chiến sĩ của các trường. Chương trình được phát sóng trực tiếp trên tinh võng nên khán giả có thể thấy được toàn cảnh tất cả mọi người đang ra sức huấn luyện, tăng cường trọng lực, đánh giáp lá cà, đánh gần rồi cả đánh tầm xa…

[Không ngờ XX lại dám cài đặt cảm giác đau chân thật tới 100%, thực sự quá đẳng cấp!]

[Năng lực cận chiến của YY mạnh ghê, rút đao laser ra rồi thì ai chơi lại được nữa!]

[Chiêu quất roi của WW quá đỉnh, trâu bò thật!!!]

Sau đó đến lượt Vệ Tam. Chỉ thấy cô khoanh chân ngồi trong sân huấn luyện, đang cắm mặt vào đọc sách.

[Cô nàng Vệ Tam kia đang đọc cái gì vậy?]

Ống kính kéo gần, ngay lập tức bìa sách trên tay Vệ Tam đã bị toàn bộ cư dân mạng thấy rõ mồn một: [Thanh Phi dạy bạn cách trở thành kỹ sư cơ giáp trong vòng hai mươi mốt ngày].

Khán giả: “…”

Vừa nhìn đã biết đây không phải là loại sách mà người đàng hoàng sẽ đọc.

Hôm sau, tin nổi bật nhất trên tinh võng là: Trong quá trình huấn luyện, học sinh trường quân đội XX không chịu được áp lực nên tâm lý bất ổn, có ý định chuyển nghề.

Waka trân trọng giới thiệu bộ truyện Đập nồi bán sắt đi học của tác giả Hồng Thứ Bắc!';

select* from ebook;
update ebook 
set book_img = "https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/1/49291.jpg?v=1&w=480&h=700", description = "'Học sinh trung học liên tiếp tử vong, nhóm nhạc nữ nổi tiếng bị giết hại dã man, cô nhi viện thường xuyên có tai nạn, những đứa trẻ mất cha mất mẹ lần lượt bị hại, hội trường bán đấu giá bỗng phát hiện xác chết, blogger nổi tiếng lìa đời một cách bí ẩn, xác chết kỳ lạ ẩn chứa những bí ẩn…

Chân tướng sự thật có thể đến muộn, nhưng mãi mãi sẽ không bao giờ vắng mặt.

Yêu hận tình thù, ngợp trong vàng son, cũng như những tổn thương ẩn dưới lớp mặt nạ mang tên tình yêu sẽ không thể che giấu được trước ánh sáng.

Người đẹp lạnh lùng thẳng thắn + chàng trai ấm áp mà gian giảo = hồi hộp kích thích tư duy, tình yêu chữa lành trái tim.

Waka trân trọng giới thiệu ấn phẩm ngôn tình trinh thám Nguyện cùng em đi qua gió sương - Tác giả Bối Tiểu Châu!"
where book_id = 2;
update ebook
set book_title ="Nguyện cùng em đi qua gió sương"
where book_id =2;
update ebook
set description = "Lâm Dã Dã chỉ muốn làm một đối tác hoàn hảo với cậu chủ nhà họ Trần trong vụ liên hôn giữa hai nhà.
Không ngờ ngay lần đầu tiên gặp mặt cậu chủ đã cười lạnh, sau đó vứt bản hợp đồng hôn nhân mà cô biên soạn ra một xó.
“Em đúng là đồ vô tình, mới một thời gian ngắn đã quên tôi rồi sao?”
“Trêu đùa tôi vui không?”
Lâm Dã Dã cảm thấy cậu chủ có ngoại hình đẹp trai chói mắt này là kẻ đầu óc không bình thường.
Nhưng không ngờ một tuần sau, người đàn ông đã khỏi hẳn cảm mạo lại cất lên giọng nói quen thuộc – là giọng nói đã khiến cô rung động bấy lâu nay.
Chẳng phải đây chính là người đàn ông có giọng nói rất hay mà cô từng gặp trong khoảng thời gian cô bị mù phải về quê dưỡng thương sao?
Thấy vẻ mặt khiếp sợ của Lâm Dã Dã, Trần Nghiệp cúi đầu cười một tiếng.
“Tôi luôn thắc mắc tại sao em lại gọi điện thoại cho tôi vào lúc nửa đêm, hoá ra là vì thích giọng của tôi.”
Chính là giọng nói lười biếng thờ ơ mà Lâm Dã Dã rất quen thuộc, chất giọng chuẩn Bắc Kinh, nửa câu sau thả nhẹ bẫng khiến trái tim cô ngứa ngáy. Giống như ánh mặt trời ban trưa, càng giống như caffeine khiến cô mê đắm.
Anh ngước mắt nhìn về phía cô, vừa nghịch chuỗi tràng hạt vừa chất vấn: “Không phải đã sờ mặt tôi rồi à? Sao đến lúc gặp lại không nhận ra?”
...
Tại buổi triển lãm mĩ thuật cá nhân của Lâm Dã Dã, Trần Nghiệp khoanh tay trước ngực, nhíu mày đứng nhìn chính mình trong tác phẩm tiêu biểu.
“Bà Trần cũng tao nhã ghê, không ngờ lại dành bao nhiêu tâm huyết chỉ để vẽ một người đàn ông.”
Lâm Dã Dã không nhịn nổi.
“Anh ấu trĩ quá đó, còn tự ghen với chính mình nữa.”
...
Khoảnh khắc Trần Nghiệp ngồi trên bờ tường nhìn thấy Lâm Dã Dã ăn mặc như một nàng tiên ra tay đánh người, hình ảnh đó đã lập tức khắc sâu vào tâm trí anh.
Không biết bản thân đã động lòng, nhưng lại từng bước đắm chìm.

Waka trân trọng giới thiệu bộ truyện Mồi câu dịu dàng tác giả Tứ Mị."
where book_id =4;
