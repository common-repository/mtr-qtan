=== mtr-QTAN ===
Contributors: nguyenvanduocit
Donate link: http://muatocroi.com/
Tags: widget
Requires at least: 3.0
Tested up to: 3.3
Stable tag: 1.6

Thêm chức năng gửi quà tặng âm nhạc vào blog.

== Description ==

= Dưới đây là một số trang cơ bản =
[Blog Mùa Tóc Rối](http://muatocroi.com) | 
[Trang gửi nhạc](http://amnhac.muatocroi.com) | 
[Trang xem lời nhắn](http://amnhac.muatocroi.com/list/)

Bạn có một blog, bạn muốn nó thêm phần sinh động, tăng tính tương tác hoặc bạn đang tìm kiếm một phương thức để người dùng có thể trao gửi đến nhau những lời yêu thương, đưa con người đến gần nhau hơn?
Những gì bạn cần thật nhiều, nhưng trước mắt bạn đây có một điều đơn giản và hiệu quả. Âm nhạc là thứ có thể truyền tải những gì ngôn từ không thể truyền tải được, nên thật tuyệt vời nếu điều bạn làm cho blog của mình là thêm cho nó chức năng “quà tặng âm nhạc”.
Với chức năng này người dùng có thể trao gửi những tình cảm mà lời nói không diễn tả hết hoặc không đủ can đảm để nói trực tiếp đến người mà họ yêu thương. 

Đặt biệt với plugin này của Mùa Tóc Rối:

* Bài hát được gửi tại một trang, nhưng được hiển thị tại rất nhiều trang trong mạng lưới. để xem danh sách các website trong mạng lưới vui lòng xem ở “other Note”
* Dữ liệu được lưu trữ tại host của Mùa Tóc Rối ở Việt Nam nên tốc độ cao và ổ định, bạn cũng không mất thêm chi phí lưu trữ lời nhắn và file nhạc
* Có thể tự động chơi nhạc, giấu player.
* Giao diện, Flash player nhỏ, nhẹ, đẹp tinh tế, nhiều style để áp dụng

= Đặc biệt =
* Khi khách tặng nhạc tại trang của bạn, thì tên trang của bạn sẽ được gửi kèm theo lời nhắn trên các trang khác.

Khi tham gia vào mạng lưới này, địa chỉ trang của bạn sẽ được đăng tại chuyên trang mtrQTAN của Mùa Tóc Rối và tại phần “other note” của wordpress.org.
Xem thêm [tại đây](http://wordpress.org/extend/plugins/mtr-qtan/other_notes/)
== 1. Phương thức tặng nhạc ==

= 1. Từ máy tính =
1. Truy cập vào trang mp3.zing.vn hoặc nhaccuatui.com
1. Chọn bài hát mình thích, chép địa chỉ của trang nghe bài đó
1. Truy cập vào trang [tặng nhạc](http://amnhac.muatocroi.com/submitForm.php)
1. Điền đầy đủ thông tin và chọn nút "tặng nhạc"

= 2. Từ điện thoại =
Đôi với chức năng này, QTAN chỉ hỗ trợ các bài nhạc trên nhaccuatui.com
1. Truy cập vào trang nhaccuatui.com
1. Chọn bài hát mình thích, Địa chỉ của bài hát có cấu trúc http://www.nhaccuatui.com/nghe?M=xxxxxxxxxx, Hãy nhớ phần xxxxxxxxxx
1. Soạn tin nhắn theo cấu trúc : SMS qtan SDT_nhận xxxxxxxxxx Lời_nhắn gửi về 8085, Cước phí 500VND/Tin
1. Bạn sẽ không được thông báo khi tin nhắn thành công, nhưng người được tặng sẽ nhận được thông báo này.
= chú ý =
Cước phí cho mỗi tin nhắn là 500vnd, được cung cấp bởi fibo. Đây là cước phí thấp nhất, và tác giả plugin này không nhận được lợi nhuận nào từ mức phí này, tất cả được trả cho fibo.
== 2. Dành cho nhà phát triển ==

= 1. Người sử dụng blog wordpress =
QTAN được phát triển thành một plugin dành cho blog wordpress rất đơn giản và dễ sử dụng. Sau khi tải về và cài đặt, bạn sẽ có thêm một widget nữa, kéo widget này vào sidebar là bạn đã có những gì mình cần
Tải ứng dụng tại [wordpress.org](http://wordpress.org/extend/plugins/mtr-qtan/)
= 2. Thông dụng (html) =
Đây là cách để chèn vào bất kỳ trang web có HTML
1. chèn đoạn code sau vào nơi muốn hiện
`<?php <div id="mtrMusicBox"></div> ?>`
1. Chèn đoạn mã này vào footer của trang
`<?php <script>
		var mtrSetting = {
			container	:	'mtrMusicBox',
			showPlayer	:	1,
			style		:	0,
			autoplay	:	0,
			showSource  :   0
		};
	</script>
	<script type="text/javascript" src="http://amnhac.muatocroi.com/public/scripts/mtrMusicBoxUsingJSON.js"></script> ?>`
= Người phát triển =
QTAN cung cấp cho bạn dữ liệu dạng JSON tại : [JSON API](http://amnhac.muatocroi.com/APIJSON.php)

= Chú ý =
Khi bạn chọn showSource là 0, nghĩa là tên trang web gửi bài hát đang hiển thị tại trang của bạn sẽ bị ẩn đi, và nếu có ai gửi nhạc từ trang của bạn, thì tên trang của bạn cũng sẽ bị ẩn trên các trang web khác.

== Installation ==

= Cài đặt thủ công =
1. Upload thư mục 'mtr-qtan' vào thư mục '/wp-content/plugins/' trên host của bạn.
1. Vào 'Dashboard => Plugins', và 'Activate' plugin.

= Cài đặt tự động =
1. Vào 'Dashboard => Plugins => add new' và tìm với tên là 'mtr-qtan'.
1. chọn 'Install Now'.
1. Sau khi cài xong, chọn 'activate'

= Sau khi cài đặt =
1. Sau khi đã cài đặt và activate xong. Bạn vào phần ‘appearance => widgets’
1. Sẽ có một widget mới là ‘mtr qtan’, bạn kéo widget này vào sidebar
1. Cài đặt các thông số

== Frequently Asked Questions ==
Nếu có bất cứ thắc mắt hoặc góp ý, xin vui lòng thảo luận tại http://wordpress.org/tags/mtr-qtan?forum_id=10 hoặc gửi e-mail về nguyenvanduoc@muatocroi.com 

== Screenshots ==
1. Sau khi chèn bào sidebar
1. Các tùy chọn
1. other style

== Changelog ==
= 1.6 =
* Cho phép tùy chọn tắt hiển thị tên trang web gửi món quà đang phát
* Thay đổi giao diện khung gửi nhạc
= 1.5 =
* Thêm chức năng hiển thị trang web gửi món quà đang hiển thị
* Tối ưu css, js
= 1.4 =
* Không sử dụng thư việq jquery
= 1.0 =
* Sử dụng nhạc của http://mp3.zing.vn
* Sử dụng jquery 1.7

