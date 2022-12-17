# Web hoạt động như nào 


### Phím `g` của google được nhấn 

Khi bạn vừa nhận `g`, trình duyệt nhận sự kiện và toàn bộ máy tự động hoàn thành sẽ hoạt động ở tốc độ cao. Phụ thuộc vào thuật toán của trình duyệt của bạn  và nêu bạn trong chế độ bảo mật/ẩn danh hoặc không có nhiều sự gợi ý sẽ được gửi tới bạn trong cửa sổ thả xuống bên dưới thanh URL. Hầu hết những kết quả ưu tiên thuật toán này dựa trên lịch sử tìm kiếm hoặc bookmarks. Bạn đang gõ "google.com" nên không có vấn đề gì, nhưng nhiều mã sẽ chạy trước sẽ ban nhận được ở đó và những gợi ý sẽ lọc với mỗi phím được nhấn. Nó thậm chí có thể gợi ý "google.com" trước khi bạn nhập nó. 

Khi bạn nhấn "enter"

Để chọn 1 điểm 0, hãy chọn phím enter trên bàn phím cái mà đánh dưới đáy của vùng của của nó. Ở điểm này, một mạch điện chỉ rõ phím enter được khóa ( trực tiếp hoặc điện dung). Điều này cho phép một số lượng nhỏ của dòng điện chạy vào mạch logic của bàn phím, cái mà quét trạng thái của mỗi phím chuyển đổi, loại bỏ những tiếng ồn của dòng điện của sự chuyển đổi ngắt quãng nhanh, và chuyển đổi nó sang mã phím số nguyên, trong trường hợp này là số 13. Trình điều khiểm bàn phím sau đó mã hóa mã phím để chuyển tới máy tinh. Điều này ngày này hầu như là được chấp nhận rộng rãi thông qua 1 (USB) hay kết nối Bluetooh


Trong trường hợp là phím của USB: 

 Mã phím sinh ra được lưu bởi bộ nhớ mạch bành phím bên trong trong 1 đăng ký gọi là "điểm cuối ". 
Trình điều khiển USB lưu trữ  thăm dò cái điểm cuối đó "10 ms" một lần và vì vậy nó lấy các mã phím được lưu ở đó. 
Giá trị này truyền tới USB SIE( Công cụ giao tiếp liên tục ) gửi ở tốc độ tối đa 1.5Mb/s (USB 2.0). 
Chữ ký chuỗi này sau đó được mã hóa ở trình điểu khiển USB lưu trữ  và được thông dịch bởi các trình điều khiển thiết bị bàn phím vạn ngăn của Thiêt bị giao diện con nguời của máy tính.
Giá trị của phím này sau đó được gửi vào trong lớp trừu tượng phần cứng của hệ điều hành.

Trong trường hớp của bàn phím màn hình cảm ứng: 

Khi người dùng đặt ngón tay của họ lên màn hình chạm dung môi hiện đại, một lượng nhỏ của dòng điện điện đưọc gửi tới các ngón tay. Điều này làm cho mạch điện thông qua trường dòng điện của lớp dẫn điện và tạo ra sự sụt giảm dòng điện ở điểm của màn hình. Trình điều khiển màn hình sau đó sinh ra 1 báo cáo thông dịch báo cáo tọa độ của cái "click ". 
Sau đó hệ điều hành của điện thoại thoong báo  cho ứng dụng tập trung hiện tại của sự kiện click trong 1 phần tử GUI của nó ( cái mà bây giờ là các nút ứng dụng trực quan)
Các bàn phím trực quan có thể sinh ra 1 thông dịch phần mềm cho việc gửi 1 "phím được nhấn" trở về hệ điều hành. 
THông dịch này thông báo ứng dụng tập trung hiện tại của 1 sự kiện "phím được nhấn"

### Phân tích URL: 

Trình duyệt bây giớ có thể có chứa các thông tin sau trong URL ( Uniform Resource Locator - Trình định vị tài nguyên thống nhất)

- Giao thức "Http": sử dụng "Phương thức chuyển tiếp Ngôn ngữ siêu văn bản"
- Tà nguyên "/": Nhận về trang chính (index)
Khi không có giao thức hay tên miền hợp lệ được cung cấp cho trình duyệt sẽ tiếp tục gửi văn bản cái mà được cung cấp trong hộp địa chỉ tới công cụ tìm kiếm mặc đính của trình duyệt. 


 ### Kiểm tra danh sách HTSS ( đã bị bỏ)
 
Trình duyệt sẽ kiểm tra danh sách HSTS của nó ( tải trước HSTS ( Bảo mật vận chuyển nghiêm ngặt HTTP )). Điều này là 2 danh sách các website cái mà có các yêu cầu đưọc liên lạc chỉ qua phương thức HTTPS 
Nếu website mà nằm trong danh sách, trình duyệt sẽ gửi các yêu cầu của nó thông qua HTTPS thay vì HTTP. ngược lại, các yêu cầu khởi tạo được tạo thông qua HTTP. 

Chú ý: website có thể vẫn sử dụng các chính sách HTTPS mà không nằm trong danh sách HSTS. Yêu cầu HTTP đầu  tiên tới website bởi người dùng sẽ nhận được 1 phản hồi cái mà yêu cầu rằng người dùng chỉ đưuọc gửi yêu cầu HTTPS. Tuy nhiên, các yêu cầu HTTP đơn này có nguy cơ để người dùng bị tấn công hạ cấp, đó là lý do tại sao danh sách HSTS được bảo gồm trong các trình duyệt hiện đại ngày nay. 


Các yêu câu của trình duyệt hiện đại yêu cầu HTTPS đầu tiên. 


### Tìm kiếm DNS ( Domain System Name)

DNS lookup

Trình duyệt cố để tìm kiếm địa chỉ IP cho mỗi domain được nhập vào. Tìm kiếm DNS tiếp tục các bước sau: 

- Bộ nhớ trinh duyệt: Trình duyệt lưu các bản ghi DNS cho mỗi lần. Thú vị, OS không nói với trinh duyệt thời gian tồn tại cho mỗi bản ghi DNS và vì vậy trình duyệt lưu chúng cho thời gian cố định ( khác nhau giữa các trình duyệt, 2- 30 phút.). 
- Bộ nhớ OS: Nếu trình duyệt không chứa các bản ghi mong đợi, trình duyệt yêu cầu 1 cuộc gọi hệ thống ( gethostbyname trong Windows). Hệ điều hành có bộ nhớ đệm của riêng nó.
- Bộ nhớ đệm định tuyến: Các yêu cầu tiếp tục trên bộ định tuyến của bạn, cái mà cơ bản có bộ nhớ đệm DNS của riêng nó. 
- Bộ nhớ đệm ÍSP DNS: Các nơi tiếp theo được kiểm tra là bộ nhớ đệm máy chủ DNS của ISP. Với 1 bộ nhớ đệm, tất nhiên.
- Tìm kiếm đệ quy: Máy chủ DNS của ISP của bạn bắt đầu tìm kiếm đệ quy, từ tên máy chủ gốc, thông qua tên máy chủ cấp cao .com tới máy chủ của GG. Thông thường, máy chủ DNS sẽ có các tên máy chủ .com trong bộ nhớ và vì vậy 1 cái đập tới máy chủ gốc là không cần thiết 
The browser tries to figure out the IP address for the entered domain. The DNS lookup proceeds as follows:



<p align="center">
  <img src="https://github.com/vasanthk/how-web-works/raw/35a22a35e318413c0f46c3c846fcdc44ea60b637/img/Example_of_an_iterative_DNS_resolver.svg" alt="Recursive DNS search"/>
</p>


### Tìm kiếm đê quy DNS: 
Một diều lo lắng về DNS là cái mà toàn bộ tên miền như wikipedia.org hay facebook.com dường như ánh xạ tới 1 địa chỉ IP duy nhất. May mắn thay, có những cách để giải quyết nút thắt này: 

- Round-robin DNS là 1 giải pháp nơi mà tìm kiếm DNS trả về nhiều địa chỉ IP tốt hơn là chỉ 1 cái. Ví dụ, facebook.com thực tế ánh xạ tới 4 địa chỉ IP. 
- Cân bằng tải: là 1 phần của phần cứng cái mà lắng nghe các địa chỉ IP cụ thể và hướng các request tới các máy chủ khác. Đa số các trang sẽ cơ bản sử dụng bộ cân bằng tải hiệu suất cao đắt tiền này. 
- DNS theo địa lý là 1 cải thiện khả năng mở rộng bằng cách ánh xạ tên miền tới các địa chỉ IP khác , phụ thuộc vào vị trí địa lý của máy khách. Điều này tốt cho lưu trữ các nội dung tĩnh để các máy chủ khác không phải cập nhật trạng thái chia sẻ. 
- Anycast là 1 kỹ thuật định tuyến nơi mà các địa chỉ IP đơn lẻ ánh xạ tới đa máy chủ vật lý. Không may, anycast không phù hợp với TCP ( Transmission Control Protocol) và hiếm khi được sử dụng trong ngữ cảnh đó. 
Hầu hết các máy chủ DNS tự nó sử dụng anycast để đạt được tính khả dụng cao và giảm độ trễ của tìm kiếm DNS. Người dùng của dịch vụ anycast ( DNS là 1 ví dụ tuyệt vời) sẽ luôn tương tác với máy chủ DNS gần nhất ( từ góc nhìn cá  nhân giao thức định tuyến ) . Điều này làm giảm đỗ trễ, cũng cung cấp 1 cấp độ cân bằng tải ( giả sử  khách hàng của bạn được phân tán xung quanh mạng của bạn)

### Cái bắt tay của socket và TLS 

- Một khi trình duyệt nhận được địa chỉ IP của máy chủ đích, nó lấy thông tin đó và số cổng được gửi từ URL ( giao thức HTTP có cổng mặc định là 80) và HTTPS có cổng mặc định là 443) và thực hiện cuộc gọi tới các phuong thức chức năng thư viện của hệ thống có tên là socket và gửi 1 luồng socket TCP. 
- Máy khách gửi 1 tin nhăn Hello tới máy chủ với phiên bản TLS của nó , danh sách của thuật toán mã hóa và các phương thức nén có sẵn. 
- Máy chủ phản hồi lại với 1 tin nhắn ServeHello tới máy khách với phiên bản TLS, các mã hóa được chọn và các phương thức nén được chọn và chứng chỉ công khai của máy chủ được ký bởi 1 CA ( Chứng chỉ xác thực). Chứng chỉ chứa 1 `key` công khai cái mà sẽ đưọc sử dụng bởi máy khách để mã hóa phần còn lại của việc hợp tác cho tới khi key  đối xứng có thể được đồng ý. 
- Máy khách xác thực chứng chỉ số của máy chủ dựa trên danh sách chứng chỉ CA tin cậy. Nếu sự thật có thể đưuọc hình thành trên CA, máy khách sinh ra 1 chuỗi các byte giả ngẫu nhiên và mã hóa với `key` công khai của máy chủ. Những byte ngẫu nhiên này có thể được sử dụng để xác định khóa đối xứng. 
- Máy chủ giải mã các byte ngẫu nhiên bằng cách sử dung các `key` private của nó và sử dụng những byte đó để sinh ra cac bản sao của khóa chính đối xứng
- Máy khách gửi 1 tin nhắn kết thúc tới máy chủ và mã hóa 1 băm của sự vận chuyển tới điểm này với khóa đối xứng
- Máy chủ sinh ra 1 mã băm của chính nó, và sau đó giải mã băm của máy khách gửi để xác thực cái mà nó khớp. Nếu khớp, nó sẽ gửi tin nhắn kết thúc của nó tới máy khách và cũng mã hóa với khóa đối xứng.
Bắt đầu từ bây giờ, trên mỗi phiên vận chuyển TLS ứng dụng (HTTP) dữ liệu được mã hóa với sự đồng ý của `key` đối xứng. 

### HTTP protocol

 Bạn có thể khá chắc chắn rằng các trang động như facebook/gmail sẽ không được phục vụ từ bộ nhớ trình duyệt bởi vì các trang động có thời gian hết hạn rất ngắn hoặc là ngây lập tức( thời gian xét về quá khứ).



HTTP/1.1 định nghĩa các kết nối đóng tùy chọn cho người gửi báo hiệu rằng kết nối sẽ kết thúc sau khi hoàn thành hồi đáp này. Ví dụ, Connnection: close.

Sau khi gửi request và các tiêu đề, trình duyệt sẽ gửi 1 dòng trống đơn mới tới máy chủ cái mà chỉ rõ nội dung của request đã hoàn thành. Máy chủ hồi đáp với 1 mã hồi đáp để biểu thị mã trạng thái của request và hồi đáp với 1 hồi đáp dạng: 200 OK [response headers]

Được theo sau bởi 1 dòng mới, và sau đó gửi 1 khối của nội dung HTML của `www.google.com`. Máy chủ có thể sau đó hoặc đóng kết nối hoặc nếu tiêu đề được gửi bởi máy khách yêu cầu nó, giữ kết nối mở cho để tái sử dụng cho các request tiếp theo.

Nếu tiêu đề HTTP được gửi bởi trình duyệt bao gồm các thông tin hợp lý cho máy chủ web để xác định nếu phiên bản của file được lưu bởi trình duyệt không được chỉnh sửa cho lần truy suất gần nhất ( nếu trình duyệt web bao gồm 1 tiêu đề ETag), nó có thể thay thế hồi đáp với 1 request có dạng: 304 NOT Modified( response headers) và không có tải trọng và trình duyệt sẽ truy suất HTML từ bộ nhớ đệm của nó

Sau khi phân tich HTML, trình duyệt web ( và máy chủ ) nhắc lại tiến trình này cho mỗi resource( image, css, favicon,...) tương ứng bởi các trang HTML, ngoại trừ thay vì GET /HTTP/1.1 các yêu cầu sẽ được GET /$ ( URL liên quan tới domain) HTTP/1.1

Nếu các HTML tham chiếu tới 1 tài nguyên trên 1 domain khác, trình duyệt sẽ trở lại các bước được gọi ở trên để giải quyết trên các domain khác, và cũng theo bởi tất cả các bước cho tới thời điểm này cho domain đó. Tiêu đề Host trong mỗi reuqest sẽ được thiết lập cho các tên máy chủ thích hợp thay vì goole.com 


Vấn đề :


- chỉ rõ dấu gach chéo ngược trong URL là quan trọng, http://facebook.com/. Trong trường hớp này, trình duyệt có thể thêm dấu gạch chéo ngược an toàn. Cho các URLs, từ dạng http://example.com/folderOrFile, trình duyệt sẽ không thể tự động thêm dấu gạch chéo ngược bởi vì nó không rõ ràng rawfngf folderOrfile là 1 folder hay 1 file. Trong trường hợp đó, trình duyệt sẽ thăm URL không có gạch chéo ngược và máy chủ sẽ phản hồi vơi 1 điều hướng, kết quả là 1 điều hướng không cần thiêt 

- Náy chủ cí thể sẽ phản hồi với mã 301 hồi đáp chuyển vĩnh viễn để nói với trình duyệt đi tới http://www.google.com thay vì "http://google.com". Có những lý do rất thú vị tại sao  máy chủ khẳng định chuyển hướng thay vì ngay lập tức hồi đáp với trang web cai mà nguời dùng muốn nhìn thấy. Một nguyên nhân phải thực hiện với xêp hạng cộng cụ tìm kiếm. Hãy xem, nếu có hai urls cho cùng 1 trang web, nói Http://www.example.com/ và http://example.com/, công cụ tìm kiếm có thể cân nhắc xem chúng có là hai trang khác nhau không, mỗi links với đầu vào ít hơn sẽ được đánh giá thấp hơn. Công cụ tìm kiếm cũng hiểu chuyển hướng vĩnh viễn 301 và sẽ nối các links đầu vào từ cả hai tài nguyên trong 1 xếp hạng đơn lẻ. Ngoải ra, đa URLs cho cùng 1 nội dung là lưu trữ không thân thiện. Khi 1 phần của nội dung có nhiều tên, nó sẽ có nguy cơ xuất hiện nhiều lần trong bộ nhớ đệm

**note**: Phản hồi HTTP bắt đầu với mã trạng thái trả về từ máy chủ. Sau đâu là 1 bảng tóm tăt chi tiết cho các mã trạng thái muốn biểu thị: 

- 1XX chỉ định chỉ 1 tin nhắn thông tin 
- 2XX chỉ định thành công của 1 số loại 
- 3xx chuyển hướng máy khách tới URL khác. 
- 4xxx chỉ rõ lỗi trên máy khách 
- 5xx chỉ rõ lỗi trên máy chủ 


## Xử lý các yêu cầu máy chủ HTTP 

- Máy chủ HTTPD ( HTTP Deamon) là 1 trình xử lý các yêu cầu/ hồi đáp trên phía máy chủ. Hầu hết các máy chủ HTTPD phổ biến là Apache or Nginx cho Linux và IIS cho windows 
- HTTPD nhận các requests 
- Máy chủ chia các yêu cầu thành các tham số sau: 
 
  - Phương thức request HTTP ( GET,POST, HEAD, PUT, DELETE). Trong trường hợp của URl được nhập trực tiếp từ thanh địa chỉ, đây là GET.
  - Domain trong trường hợp này là google.com 
  - Đường dẫn trang yêu cầu là: / ( vì không chỉ rõ đường dẫn được yêu cầu, / là đường dẫn mặc định)
  - Máy chủ xác nhận rằng có 1 Máy chủ ảo đưọc cấu hình trên máy chủ cái mà tương thich với google.com 




- Máy chủ xác nhận google.com có thể chấp nhận request GET 
- Máy chủ xác nhận rằng máy khách là được để sử dụng phương thức này, (bằng IP, authentication,...)
- Nếu máy chủ có các modle viết lại được cài đặt, ( như mod_rewrite cho Apache hay URL Rewrite cho IIS), nó sẽ cố gắng để khớp các yêu cầu dựa trên các quy tắc được cấu hình. Nếu 1 quy tắc khớp được tìm thấy, máy chủ sẽ sử dụng nó để viết lại các yêu cầu.
- Máy chủ sẽ kéo tất cả các nội dung tương thích với request và trong trường hợp của chúng ta nó sẽ lấy lại từ file index, vì '/' là file chính ( trong vài trường hợp có thể ghi đè điều này, nhưng nó là phương thức phổ biến nhất).
- Máy chủ phân tích các file cùng với các trình xử lý request. Một trình xử lý request là 1 chương trình ( in ASP>NET, PHP....) cái mà đọc các request và sinh ra HTML cho mỗi hồi đáp. Nếu GG được chạy trên PHP, máy chủ sử dụng PHP để thông dịch file index và các luồng đầu ra tới người dùng. 


**chú ý** : Một sự khó khăn thú vị rằng mỗi trang động đối mặt đó là lưu dữ liệu như nào. Các trang nhỏ hơn sẽ thường lưu với 1 CSDL đơn SQL, nhưng các trang lưu dữ liệu lớn hay có nhiều người truy cập phải tìm cách để chia CSDL cho nhiều máy. Giải pháp bao gồm ( chia 1 bảng trên nhiều CSDL dựa trên các khóa chính), nhân bản và sử dụng các CSDL đơn giản hóa với ngữ ngữa nhất quán yếu. 





### Phản hồi máy chủ 

 Đây là 1 phản hồi cái mà máy chủ sinh ra và gửi lại 
```x
HTTP/1.1 200 OK
Cache-Control: private, no-store, no-cache, must-revalidate, post-check=0,
pre-check=0
Expires: Sat, 01 Jan 2000 00:00:00 GMT
P3P: CP="DSP LAW"
Pragma: no-cache
Content-Encoding: gzip
Content-Type: text/html; charset=utf-8
X-Cnection: close
Transfer-Encoding: chunked
Date: Fri, 12 Feb 2010 09:05:55 GMT

2b3
��������T�n�@����[...]
```

 Toàn bộ phản hồi là 36kb, phần còn lại của chúng nằm ở phần byte đốm màu ở cuối tôi đã lược bớt. 

Tiêu đề Content-Encoding nói với trình duyệt rằng phản hồi với thân được nén bằng cách sử dụng thuật toán gzip. sau khi giải nén đốm màu, bạn sẽ thấy HTML bạn mong chờ
```
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"
      lang="en" id="google" class=" no_js">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-language" content="en" />
...
```

Chú ý tiêu dề cái mà thiết lập Content-type dạng text/html. Tiêu đề hướng dẫn trình duyệt để kết xuất nội dung phản hồi như HTML, thay vì nói nó tải như 1 file. Trình duyệt sẽ sử dụng tiêu đề để mô tả phản hồi được thông dịch như nào, nhưng vẫn cân nhắc các nhân tố khác, như phần mở rộng của URL. 



#### Ngữ cảnh đẳng sau của trình duyệt: 


Một khi máy chủ hỗ trợ các tài nguyên (HTML,CSS,JS...) tới trình duyệt, nó sẽ thực thi các tiến trình ngầm sau đây: 
- Phân tích: HTML,CSS,JS 
- Kết xuất: Cấu trúc cấy DOM->render TRee ->Giao diện của Render Tree->Vẽ màu cho render tree. 
#### Cấu trúc cấp cao của trình duyệt: 

- Giao diện người dùng: Bao gồm thanh địa chỉ, nút back/forward, menu bookmark,....Mỗi phần của trình duyệt được thể hiện ngoại trừ cửa sổ nơi bạn đang thấy trang được yêu cầu. 
- **Công cụ trình duyệt**: Thống nhất hành động người dùng và công cụ kết suất. 
- **công cụ kết suất**: Chịu trách nhiệm cho mô tả các nội dung được request. Ví dụ, công cụ kết suất phâ tích HTML và CSS, và thể hiện các nội dung được phân tích trên màn hình. 
- **mạng**: Cho các cuộc gọi mạng, như HTTP request, bằng cách sử dụng các khai triển khác nhau cho các môi trường khác nhau ( đằng sau các giao diện không phụ thuộc môi trường)
- **UI backdend**: Được sử dụng cho vẽ các khối cơ bản như hộp và cửa sổ. Backend này thể hiện 1 giao diện chung cái mà không chỉ rõ môi trường. Dưới đó, nó sử dụng các giao diện người dùng hệ điều hành,
- **data storage**: Đây là lớp vĩnh viễn. trình duyệt có thể cần để lưu dữ liệu cục bộ, như cookies. Trình duyệt cũng hỗ trợ các cơ chế lưu trữ như localstorage, indexDB và filesystem. 


<p align="center">
  <img src="https://github.com/vasanthk/how-web-works/raw/35a22a35e318413c0f46c3c846fcdc44ea60b637/img/layers.png" alt="Browser Components"/>
</p>

## Browser Components
 

Hãy bắt đầu, với trường hợp đơn giản nhất: 1 trang HTML thuần với một vài văn bản và 1  ảnh đơn giản. Trình duyệt cần làm gì để thực thi trang đơn giản này? 

- Quy ước: Trình duyệt đọc các byte thô của HTML của ổ đĩa hoặc network và chuyển chúng thành các ký tự riêng biệt dựa trên mã hóa chỉ rõ của file (UTF-8)
- Mã hóa: Trình duyệt chuyển các chuỗi của ký tự sang các mã hóa khác biệt được chỉ định bởi tiêu chuẩn HTML5 W3C - e.g và các chuỗi khác bên trong dấu ngoặc nhọn.Mỗi mã hóa có 1 ý nghĩa đặc biệt và 1 tập các quy tắc. 
- Lexing: Các mã thông báo phát ra được chuyển sang các đối tượng cái mà được dịnh nghĩa các thuộc tính và các quy tắc của nó. 
- Cấu trúc DOM: Cuối cùng, bởi vì đánh dấu ngôn ngữ HTML định nghĩa các mối quan hệ giữa các tags( một vài tags chứa trong các tags khác) đối tượng được tạo  được liên kết trong 1 cấu trúc dữ liệu cây cái mà cũng chứa mối quan hệ cha-con được định nghĩa trong đánh dấu gốc: Đối tượng HTML là cha của đối tượng body....




Đầu ra cuối cùng của toàn bộ tiến trình này là DOM của 1 trang đơn giản, cái mà trình duyệt sử dụng cho tất cả các tiến trình tiếp theo của trang. 


- Mỗi lần trình duyệt phải xử lý HTML,nó phải qua các bước ở trên: chuyển đổi bytes sang ký tự, định danh mã hóa, chuyển các mã hóa sang các nút, và xây dựng 1 cây DOM. Toàn bộ tiến trình này có thể nhiều thời gian, đặc biệt nếu chúng ta có 1 số lượng lớn HTML để tiên hành. 


Tracing DOM construction in DevTools

 Nếu bạn mở DevTool chrome, và bản ghi thời gian trong khi trang được tải, bạn có thể thấy thời gian thực tế cần thực thi bước này- trong ví dụ trên, nó cần 5ms để chuyển các đoạn HTML sang cây DOM. Tất nhiên, nếu trang lớn hơn, như hầu hết các trang, tiến trình này cần nhiều thời gian hơn. Bạn có thể thấy trong hướng dẫn tương lai trong việc tạo ra các hiệu ứng mượt mà cái mà có thể dễ dàng trở thành nút thắt nếu trình duyệt phải xử lý lượng lớn HTML. 


### Công cụ kết suất 
 
Một công cụ kết xuất  là 1 thành phần phần mềm cái mà nhận các nội dung đánh dấu ( như HTML, XML, image) và các thông tin định dạng ( như css, XSL,..) và thể hiện các nội dung dược định dạng trên màn hình


|Browser           |Engine                       |
|----------------- |:---------------------------:|
|Chrome            | Blink (a fork of WebKit)    |
|Firefox           | Gecko                       |
|Safari            | Webkit                      |
|Opera             | Blink (Presto if < v15)     |
|Internet Explorer | Trident                     |
|Edge              | Blink (EdgeHTML if < v79)   |


Webkit là xông cụ kết xuất mã nguồn mở cái mà bắt đầu với 1 công cụ cho môi trường Linux và được điều chỉnh bởi Apple để hỗ trợ cho Mac và Windows. 
 
Công cụ kết xuất là đơn luồng. Như hầu hết mọi thứ, ngoại trừ các thao tác mạng, xảy ra trong đơn luồng. Trong FireFox và Safari cái này là luồng chính của trình duyệt. Trong Chrome, nó là luồng chính tiến trình tag. 

Các họat động mạng có thể được thực thi bởi một vài luồng song song. Số các kết nối song song là giới hạn ( thường là 6-13 kết nối cho mỗi tên máy chủ) 
Luồng chính của trình duyệt là 1 vòng lặp. Nó là 1 vòng lặp vô tận cái mà giữ cho tiến trình luôn hoạt động. Nó chờ các sự kiện ( như giao diện hay sự kiện tô màu) và xử lý chúng. 

Chú ý: Các trình duyệt như chrome chạy nhiều thực thể của công cụ kết suất: mỗi cái cho 1 tab. Mỗi tab chạy trong 1 tiến trình riêng lẻ. 




## Luồng chính 

Công cụ kết suất sẽ bắt đầu lấy nội dung của tài liệu được yêu cầu từ lớp networking. Điều này là thường hoàn thành với đoạn 8KB.
Sau đó, luồng cơ bản của công cụ kết suất là: 




<p align="center">
  <img src="https://github.com/vasanthk/how-web-works/raw/35a22a35e318413c0f46c3c846fcdc44ea60b637/img/flow.png" alt="Rendering engine basic flow"/>
</p>

Công cụ kết suất sẽ bắt đầu phân tích tải liệu HTML và chuyển các phần tử sang  [DOM](http://domenlightenment.com/)các node trong cây được gọi là **content tree**. 
Công cụ sẽ phân tích kiểu dữ lieuj, cả tệp css bên ngoài và trong phần tử. Định kiểu thông tin cùng với các hướng dẫn trực quan trong HTML sẽ được sử dụng để tạo ra 1 cây khác: **cây kết xuất**.

Cây kết xuất chứa các vùng hình chữ nhật với các thuộc tính trực quan như hình ảnh và kích thước. Vùng hình chữ nhật là theo đúng thứ tự được biểu diễn trên màn hình. 
Sau cấu trúc của cây kết xuất, nó đi qua 1 tiến trình **layout**. Điều này có ý nghĩa cung cấp cho mỗi node tọa độ chính xác nơi mà nó nên xuất hiện trên màn hình. 
Các trạng thái tiếp theo là **painting** - cây kết xuất sẽ được đi qua và mỗi node sẽ được **painting** bằng lớp backend UI. 
Nó là quan trọng để hiểu rằng điều này là 1 tiền trình dần dần. Cho những trải nghiệm người dùng tốt hơn, công cụ kết suất sẽ cố gắng thể hiện nội dung trên màn hình nhanh nhất có thể. Nó sẽ không đợi cho đến khi tất cả các HTML được phân tich trước khi bắt đầu xây dựng và  bố trí cây kết xuất. Các phần còn lại sẽ được phân tích và thể hiện, trong khi tiến trình tiếp tục với phần nội dung còn lại cái mà đến từ network. 


Dưới đây là luồng hoạt động của Webkit: 

<p align="center">
  <img src="https://github.com/vasanthk/how-web-works/raw/35a22a35e318413c0f46c3c846fcdc44ea60b637/img/webkitflow.png" alt="Webkit main flow"/>
</p>

## Phân tích cơ bản 

**parsing**: Chuyển đổi tài liệu tới 1 cấu trúc mã có thể sử dụng. Kết quả của phân tích  thường là cây của các node cái mà tái hiện lại cấu trúc của tài liệu. 

**Grammar**: Phân tich dựa trên quy tắc cú pháp của tài liệu tuân theo: Ngôn ngữ hoặc định dạng nó được viết. Mỗi định dạng bạn có thể phân tích phải có ngữ pháp xác định cái mà bao gồm từ vựng và các quy tắc cú pháp. Nó được gọi là 1 **ngữ pháp miễn phí ngữ cảnh**. 

Phân tich có thể được chia ra thành hai tiến trình con: phân tích từ vựng và phân tích cú pháp. 



**phân tích từ vựng**: Tiến trình của việc chia đầu vào thành các mã. Các mã là các từ vựng ngôn ngữ: bộ sưu  tập của các khối xây dựng hợp lệ. 
**Phân tích cú pháp**: Việc áp dụng của các quy tắc cú pháp ngôn ngữ. 


Trình phân tích thường chia thành hai thành phần chính: từ vựng ( thỉnh thoảng gọi là mã thông báo ) cái mà có nhiệm vụ chia đầu vào thành các mã hợp lệ, và trình phân tích cái mà có trách nhiệm cho xây dựng cây phân tích bằng các phân tích cấu trúc tài liệu cùng với các quy tăc cú pháp ngôn ngữ. Từ vựng biết cách dể giải các ký tự không liên quan giống như khoảng trắng và xuống dòng. 

<p align="center">
  <img src="https://github.com/vasanthk/how-web-works/raw/35a22a35e318413c0f46c3c846fcdc44ea60b637/img/image011.png" alt="Source document to parse tree"/>
</p>


Tiến trình phân tích là 1 vòng lặp. Trình phân tích sẽ thường yêu cầu trình phân tích từ vựng cho 1 mã thông báo mới và cố gắng để khớp với các mã với 1 trong các quy tắc cú pháp. Nếu 1 quy tắc khớp, một node tương ứng với mã sẽ được thêm vào cây phân tích  và trình phân tích sẽ tiếp tục yêu cầu các mã khác. 

Nếu không có quy tắc nào khớp, trình phân tich sẽ lưu các mã bên trong, và giữ các yêu cầu cho các mã cho đến khi 1 quy tắc khớp với tất cả các mã được lưu trong được tìm thấy. Nếu không có quy tăc nào được tìm thấy sau đó trình phân tích sẽ sinh ra 1 ngoại lệ. Điều này có nghĩa là tài liệu không hợp lệ và chứa lỗi cú pháp. 

Công việc của trình phân tích HTML là phân tích đánh dấu HTML trong 1 cây phân tích. HTML định nghĩa trong 1 định dạng DTD( Document Type Definition). ĐỊnh dạng này được sử dụng để định nghĩa ngôn ngữ của gia dình SGML. Định dạng bao gồm các định nghĩa cho tất cả các thành phần được phép, các thuộc tính của nó và phân cấp thứ bậc. Như chúng ta đã thấy trước đó, DTD HTML không định dạng 1 ngữ pháp tự do ngữ cảnh. 

Thuật toán phân tích HTML chứa hai trạng thái: mã thông báo và cấu trúc cây. 

**Tokenization**là 1 phân tích từ vựng, phân tích đầu vào thành các mã. Trong số các mã HTML được bắt đầu bằng các mở tag, đóng tag và các tên thuộc tính và các giá trị. Mã thông báo phát hiện ra các mã, gửi chúng tới trình khởi tạo cây  và sử dụng ký tự tiếp theo cho việc phát hiện ra các mã tiếp theo. và tiếp tục cho đến khi hết đầu vào. 

<p align="center">
  <img src="https://github.com/vasanthk/how-web-works/raw/35a22a35e318413c0f46c3c846fcdc44ea60b637/img/image017.png" alt="HTML parsing flow"/>
</p>

## Cây DOM 

Cây đầu ra ( cây phân tích) là 1 cây của phần tử DOM và các node thuộc tính. DOM là viết tắt cho Mô hình đối tượng tài liệu. Nó là 1 đối tương đại diện của tài liệu HTML và giao diện của các phần tử HTML để xuất ra bên ngoài như Javascript. Gốc của cây là đối tượng "Document". 

DOM hầu như có quan hệ một một với đánh dấu. Ví dụ 



```html
<html>
  <body>
    <p>
      Hello World
    </p>
    <div> <img src="example.png"/></div>
  </body>
</html>
```

 Đánh dấu này sẽ được chuyển dịch sang cây DOM sau: 
This markup would be translated to the following DOM tree:

<p align="center">
  <img src="https://github.com/vasanthk/how-web-works/raw/35a22a35e318413c0f46c3c846fcdc44ea60b637/img/image015.png" alt="DOM Tree"/>
</p>

### Tại sao DOM chậm ?


Câu trả lời ngắn là DOM không chậm. Thêm và xóa 1 node DOM là 1 ít điểm chuyển đổi, nó không quá nhiều hơn việc thiêt lập 1 thuộc tính cho đối tượng JS. 

Tuy nhiên, bố cục thì chậm. Khi bạn chạm vào DOM theo bất kỳ cách nào, bạn thiết lập 1 mã bit bẩn trên toàn bộ cây cái mà nói với trình duyệt nó cần tìm ra nơi mọi thứ diễn ra trở lại. Khi Js thao tác điều khiển trở lại trình duyệt, nó gọi thuật toán bố cục của nó ( hay kỹ thuật hơn, nó gọi thuật toán tính toán lại css của nó, sau đó, bố cục , sau đó là tô màu lại, sau đó là tổng hợp lại. ) để vẽ lại màn hình. THuật toán bố cục khá phức tạp - đọc CSS để hiểu một vài quy tắc - và điều đó nghĩa là nó thường phải tạo ra các quyết định không cục bộ 

Tệ hơn, bố cục được kich hoạt đồng bộ bởi truy cập các thuộc tính cụ thể. Trong số chúng là getComputedStyleValue(), getBoundingClientWith(),.offsetWidth, offSetHeight,... cái mà làm cho chúng dễ dàng 1 cách ngớ ngẩn để chạy bên trong. Danh sách đầy đủ là [here](https://gist.github.com/paulirish/5d52fb081b3570c81e3a).

Bởi vì điểu này, nhiều mã Angular và Jquery chạy chạm ngớ ngẩn. Một bố cục sẽ thổi bay toàn bộ ngân sách khung của bạn trên các thiết bị mobie. khi tôi đo lường, nó gây ra 13 bố cục trong 1 truy vấn  và khóa màn hình gần hai giây. 

React không giúp tăng tốc bố cục - nếu bạn muốn các hoạt ảnh mượt mà trên trình duyệt mobie, bạn cần sắp xếp lại các kỹ thuật khác như giới hạn tất cả các thứ bạn làm trong 1 khung để thao tác cái mà có thể được thực thi trên GPU. NHưng những gì nó làm là để đảm bảo rằng có nhiêu nhất 1 bố cục đưọc thực thi cho mỗi lần bạn cập nhật trạng thái của trang. Điều đó thường là 1 sự cải thiện trên trạng thái trang. 

## Cây kết xuất. 

Trong khi cây DOM đang được xây dựng, trình duyệt xây dựng 1 cây khác, gọi là cây kết xuất. Cây này là 1 tập các phần tử trực quan trong thứ tự chúng sẽ được thể hiện. Nó là các đại diện trực quan của tài liệu. Mục đích của cây này là để kích hoạt việc tô màu nội dung theo đúng thứ tự của nó. 


Một trình kết xuất biết cách để bố cục và tô màu chính nó và các con của nó. Mỗi trình kết xuất đại diện cho 1 vùng hình chữ nhật cái mà thường tương thích với các hộp css của node. 

## Mối quan hệ của cây kết xuất với cây DOM 

Các trình kết xuất tương ứng với các thành phần DOM, nhưng  mối quan hệ không phải là 1-1. Các phần tử DOM không trực quan sẽ không được chèn vào cây tree. Một ví dụ là phần tử "head". Ngòai ra các phần tử cái mà thể hiện giá trị được gán là "none" sẽ không xuất hiện trên cây ( Trong khi các phần tử với hiển thị "ẩn" sẽ xuất hiện trong cây)


Có các phần tử DOM cái mà tương ứng với một vài đối tượng trực quan. Chúng thưởng là những phần tử với cấu trúc phức tạp cái mà không thể được mô tả với 1 hình chữ nhật. Ví dụ như, các phần tử 'select' có 3 trình kết xuất: một cho mô tả vùng, 1 cho danh sách xổ xuống và 1 cho nút. Ngoài ra khi văn bản được chia thành nhiều dòng bởi bì chiều rộng là không hợp lý cho 1 dòng, dòng mới sẽ được thêm vào như 1 trình kết xuất. 

MỘt vài trình kết suất tương ứng với 1 node DOM nhưng không được đặt vào đúng nơi trong cây. Floats và absolutedly positioned là bên ngoài luồng, đặt trong 1 phần khác của cây, và ánh xạ tới các khung thực. Một trình giữ chỗ khung là nơi chúng nên được để. 

<p align="center">
  <img src="https://github.com/vasanthk/how-web-works/raw/35a22a35e318413c0f46c3c846fcdc44ea60b637/img/image025.png" alt="The render tree and the corresponding DOM tree"/>
</p>


Trong webkit, tiến trình của giải quyết định kiểu và tạo ra 1 trình kết xuất gọi là 1 "đính kèm tệp". Mỗi node DOM có 1 phương thức "attach". ĐÍnh kèm là đồng bộ, node được chèn tới cây DOM goi các phương thức 'attach node mới'

Xây dựng cây kết xuất yêu cầu tính toán các thuộc tính trực quan của mỗi đối tượng kết xuất. Điều này được thưc hiện bằng cách tính toán các thuộc tính kiểu của mỗi thành phần. Định kiểu bao gồm các bảng định kiểu của nhiều nguồn gốc, định kiểu nội tuyến và các thuộc tính trực quan trong HTML( như thuộc tính "bgcolor" ). Sau đó được chuyển dổi để khớp với các thuộc tính định kiểu css. 

## Phân tích CSS 

Bộ chọn CS được khớp bởi công cụ trình duyệt từ trái sang phải. Hãy nhớ, khi trình duyệt đang thực hiện bộ chọn khớp, nó có 1 phần tử ( phần tử mà trình duyệt đang cố xác định kiểu) và tất cả các quy tắc của bạn và các bộ chọn của nó và nó cần tìm các quy tắc phù hợp với phần tử. Điều này khác với việc sử dụng Jquery, cho rằng, bạn chỉ có 1 bộ trọn và bạn cần tìm ra tất cả các phần tử khớp với bộ chọn đó


Độ đặc  hiệu của bộ chọn đưọc tính toán như sau: 

* Đếm 1 nếu khai báo nó từ 1 thuộc tính định kiểu hơn là 1 quy tắc với bộ chọn , 0 ngược lại (=a),
* Đếm số của bộ chọn ID trong bộ chọn (=b),
* Đếm số bộ chọn lớp, bộ chọn thuộc tính và lớp giả trong bộ chọn (=c)
* Đếm số tên của phần tử và phần tử giả của bộ chọn (=d)
* Count the number of ID selectors in the selector (= b)
* bỏ qua bộ chọn toàn bộ. 


Nối 3 số  a-b-c-d ( trong 1 hệ thống số với cơ số lớn) cung cấp độ đặc hiệu. Cơ sở sô bạn cần để sử dụng được định nghĩa bởi giá trị cao nhất bạn có trong a,b,c or d

Examples:

``` txt
*               /* a=0 b=0 c=0 -> specificity =   0 */
LI              /* a=0 b=0 c=1 -> specificity =   1 */
UL LI           /* a=0 b=0 c=2 -> specificity =   2 */
UL OL+LI        /* a=0 b=0 c=3 -> specificity =   3 */
H1 + *[REL=up]  /* a=0 b=1 c=1 -> specificity =  11 */
UL OL LI.red    /* a=0 b=1 c=3 -> specificity =  13 */
LI.red.level    /* a=0 b=2 c=1 -> specificity =  21 */
#x34y           /* a=1 b=0 c=0 -> specificity = 100 */
#s12:not(FOO)   /* a=1 b=0 c=1 -> specificity = 101 */
```

Tại sao CSSOM có cấu trúc cây? Khi tính toán tập cuối cùng cuả định kiểu cho bất kỳ đối tượng nào của trang, trình duyệt bắt đầu với hầy hết các quy tắc chung áp dụng với node.( nếu nó là con của phần tử body, sau đó tất cả các định kiểu cho body được áp dụng) sau đó khôi phục đệ quy các kiểu dáng đã tính toán bằng cách áp dụng nhiều hơn các quy tắc được chỉ rõ. ví dụ "cascade down "


webKit sử dụng 1 cở để đánh dấu nếu tât cả các định kiểu cao cấp ( bao gồm @import) được tải. Nếu định kiểu không được tải 1 cách đầy đủ khi đính kèm, trình giữ chỗ được sử dụng và nó được đánh dấu trong tài liệu và được tính toán lại khi định kiểu được tải

## Bố cục. 

Khi trình kết xuất được tạo và thêm vào cây, nó không có vị trí và kích thước. Tính toán những giá trị này được gọi là bố cục hay reflow. 

HTML sử dụng 1 luồng dựa trên mô hình layout, có nghĩa là hầu hết thời gian nó có thể để tính toán hình dánh trong 1 lần chạy. Mỗi lần tử sau đó trong luồng cơ bản không ảnh hưởng tới hình dáng của phần tử cái mà xuất hiện sớm hơn trong luồng, vì layout có thể thực thi từ trái sang phải từ trên xuống dưới thông qua tài liêu. Hệ thống tọa độ liên kết tới gốc khung. Tọa dộ top và left được sử dụng 



Bố cục là 1 tiến trinh đệ quy. Nó bắt đầu ở trình kết xuất gốc, cái mà tương ứng với phần tử `html` của tài liệu HTML. Layout tiếp tục đệ quy thông qua vài hoặc tất cả các thứ bậc của khung, tính toán hình dáng cho mỗi trình kết suất cái mà yêu cầu nó. 


Vị trí của kết xuất gốc là 0,0 và hình dáng của nó là toàn  bộ khung nhìn - phần nhìn thấy của cửa sổ trình duyệt. Tất cả các trình kết xuất có 1 'layout' phương thức, mỗi trình kết xuất gọi phương thức layout của phần tử con của nó cái mà cần layout. 

Để không phải thực hiện toàn bộ layout cho mỗi thay đổi nhỏ, các trình duyệt sử dụng 1 'bit bẩn'. Một trình kết xuất cái mà được thay đổi hoặc thêm các đánh dấu chính nó  và con của nó như là "bẩn": cần được layout. Có hai cờ: "dirty" và "con bẩn" có nghĩa là mặc dù trình kết xuất tự nó ok, nhưng nó có ít nhất 1 con cần 1 layout. 

layout thường có các mẫu sau: 

- Kết xuất cha xác định chiều rộng của nó. 
- Cha đi qua con và : 
 
  - Đặt trình kết xuất con ( thiết lập x, y)
  - Gọi layout con nếu cần - chúng là bẩn hoặc chúng ta cần trong 1 layout toàn cục, hoặc cho các nguyên nhân khác - cái tính toán chiều cao của con. 

- Các phần tử cha sử dụng các chiều cao tích lũy của phần tử con  và chiều cao của lề và đệm để thiết lạp chiều cao của chính nó- điều này sẽ được sử dụng bởi cha của cha của kết suất. 
- Thiết lập mã bẩn của nó thành fasle. 

Cũng chú ý, phá vỡ layout là  nơi 1 trình duyệt web phải điều chirh luồng hoặc vẽ lại 1 trang nhiều lần trước khi trang được tải. Trong những ngày trước khi Js xuất hiện, các websites cơ bản được điều chỉnh lại luồng và sơn lại 1 lần nhưng ngày nay, nó là sự phát triển của js để chạy load trang cái mà có thể gây ra các điều chỉnh tới DOM và bởi vayah thêm các điều chỉnh luồng hoặc vẽ lại. Phụ thuộc vào số của các diều chỉnh luồng và sự phức tạp của trang, có những nguy cơ để gây ra các trì hoãn đáng kể khi tải trang, đặc biệt trên các thiết bị năng lượng thấp như điện thoại hay máy tính bảng. 


## Sơn 

Trong giai đoạn sơn, cây kết xuất được đi qua à phương thức 'paint() ' của kết xuất được gọi để biểu diễn nội dung trên màn hình. Sơn sử dụng các thành phần cơ sở hạ tầng UI 


Giống như layout, painting có thể là toàn bộ cây toàn cầu được sơn hoặc gia tăng. TRong bức tranh gia tăng, một vài trình kết xuất thay đổi trong 1 cách mà không ảnh hưởng tới toàn bộ cây. Các trình kết xuất đã thay đổi vô hiệu hóa vùng của nó trên màn hình. Điều này dẫn đến OS để xem nó như 1 "vùng bẩn" và sinh ra 1 sự kiện 'paint '. OS thực hiện điều đó rất thông minh và hợp nhất một số vùng thành 1. 

Trước khi sơn lại, WebKit lưu các vùng cũ như 1 bitmap. Sau đó no sơn lại chỉ khu vực giữa hình chữ nhật cũ và mới. Các trình duyệt cố để thực hiện các hành động nhỏ nhất trong phần phản hồi tới 1 thay đổi. Vì các thay đổi màu 1 phần tử sẽ gây sơn lại phần tử. Thay đổi tới vị trí phần tử sẽ gây ra lay out và sơn lại phần tử., con phần tử và vị trí anh em. Thêm 1 node DOM sẽ gây ra vẽ lại và sơn lại node. Đa số các thay đổi giống như tăng kich thước phần tử 'html' , sẽ gây ra sự vô hiệu hóa của bộ nhớ đệm và bố cục lại và sơn lại toàn bộ cây. 

Có 3 lược đồ vị trí khác nhau : 


* **Normal**: Đối tượng được đặt theo đúng vị trí của nó trong tài liệu. Có nghĩa là vị trí của nó trong cây kết xuất giông như trong cây DOM và được sắp xếp theo kích thước kiểu hộp của nó. 
* **Float**: đối tương đầu tiên được sắp xếp theo luồng bình thường, sau đó chuyển sang bên trái hoặc phải xa nhất có thể. 
* **Absolute**: Đối tượng được đặt trong cây kết xuất trong 1 vị trí khác so với trong cây DOM. 

Lược đồ vị trí được thiết lập bởi thuộc tính "position" và 'float'
- tĩnh và relative gây ra 1 luồng bình thường. 
- absoluted và fixed gây  ra vị trí tuyệt đối

Trong vị trí tĩnh không vị trí được đinh nghĩa và vị trí mặc định được sử dụng, Trong lược dồ khác, tác giả chỉ rõ vị trí: top, bottom, left, right. 
**layers** được chỉ rõ bởi thuộc tính z-index. Nó đại diện cho chiều không gian thứ 3 của hộp: vị trí của nó theo trục z. 

Các khối hộp được chia ra các stacks( gọi là ngữ cảnh stack). Trong mỗi stach các phần tử sau dẽ được sơn đầu tiên và những phần tử trên top, gần với người dùng. Trong trường hợp chồng lên nhua, phần tử quan trọng nhất sẽ ẩn đi các phần tử ít quan trọng hơn. Các ngắn xếp được xếp thepo thuộc tính z-index. Các hoppj với thuộc tinh z-index từ ngăn xếp cục bộ.

## chuyện vặt vãnh

### Sự ra đời của web

Tim Berners-Lee, một nhà khoa học người Anh tại CERN, đã phát minh ra World Wide Web (WWW) vào năm 1989. Ban đầu, trang web này được hình thành và phát triển để đáp ứng nhu cầu chia sẻ thông tin tự động giữa các nhà khoa học trong các trường đại học và viện nghiên cứu trên khắp thế giới.

Trang web đầu tiên tại CERN - và trên thế giới - được dành riêng cho chính dự án World Wide Web và được lưu trữ trên máy tính NeXT của Berners-Lee. Trang web đã mô tả các tính năng cơ bản của trang web; cách truy cập tài liệu của người khác và cách thiết lập máy chủ của riêng bạn. Máy NeXT - máy chủ web ban đầu - vẫn còn ở CERN. Là một phần của dự án khôi phục [trang web đầu tiên](http://info.cern.ch/), vào năm 2013, CERN đã khôi phục trang web đầu tiên trên thế giới về địa chỉ ban đầu.

Vào ngày 30 tháng 4 năm 1993, CERN đưa phần mềm World Wide Web vào phạm vi công cộng. CERN đã cung cấp bản phát hành tiếp theo với giấy phép mở, như một cách chắc chắn hơn để tối đa hóa việc phổ biến nó. Thông qua những hành động này, cung cấp miễn phí phần mềm cần thiết để chạy máy chủ web, cùng với [trình duyệt cơ bản](http://line-mode.cern.ch/) và một thư viện mã, web đã được phép phát triển.

WebKit là một công cụ kết xuất nguồn mở bắt đầu như một công cụ cho nền tảng Linux và đã được Apple sửa đổi để hỗ trợ Mac và Windows.

Công cụ kết xuất là một luồng đơn. Hầu hết mọi thứ, ngoại trừ các hoạt động của mạng, đều diễn ra trong một luồng duy nhất. Trong Firefox và Safari, đây là luồng chính của trình duyệt. Trong Chrome, đó là luồng chính xử lý tab. Các hoạt động mạng có thể được thực hiện bởi một số luồng song song. Số lượng kết nối song song bị hạn chế (thường là 6-13 kết nối cho mỗi tên máy chủ).

Chủ đề chính của trình duyệt là một vòng lặp sự kiện. Đó là một vòng lặp vô hạn giữ cho quá trình tồn tại. Nó đợi các sự kiện (như sự kiện bố cục và vẽ) và xử lý chúng.

Lưu ý: Các trình duyệt như Chrome chạy nhiều phiên bản của công cụ kết xuất: một phiên bản cho mỗi tab. Mỗi tab chạy trong một quy trình riêng biệt.

Dòng chảy chính
Công cụ kết xuất sẽ bắt đầu nhận nội dung của tài liệu được yêu cầu từ lớp mạng. Điều này thường được thực hiện trong khối 8KB.

Sau đó, quy trình cơ bản của công cụ kết xuất là:

Luồng cơ bản của công cụ kết xuất

Công cụ kết xuất sẽ bắt đầu phân tích cú pháp tài liệu HTML và chuyển đổi các phần tử thành các nút DOM trong một cây được gọi là "cây nội dung".

Công cụ sẽ phân tích cú pháp dữ liệu kiểu, cả trong các tệp CSS bên ngoài và trong các phần tử kiểu. Thông tin tạo kiểu cùng với hướng dẫn trực quan trong HTML sẽ được sử dụng để tạo một cây khác: cây kết xuất. Cây kết xuất chứa các hình chữ nhật với các thuộc tính trực quan như màu sắc và kích thước. Các hình chữ nhật theo đúng thứ tự được hiển thị trên màn hình.

Sau khi xây dựng cây kết xuất, nó sẽ trải qua quá trình "bố cục". Điều này có nghĩa là cung cấp cho mỗi nút tọa độ chính xác nơi nó sẽ xuất hiện trên màn hình.

Giai đoạn tiếp theo là vẽ - cây kết xuất sẽ được duyệt qua và mỗi nút sẽ được vẽ bằng cách sử dụng lớp phụ trợ giao diện người dùng.

Điều quan trọng là phải hiểu rằng đây là một quá trình dần dần. Để có trải nghiệm người dùng tốt hơn, công cụ kết xuất sẽ cố gắng hiển thị nội dung trên màn hình càng sớm càng tốt. Nó sẽ không đợi cho đến khi tất cả HTML được phân tích cú pháp trước khi bắt đầu xây dựng và bố trí cây kết xuất. Các phần của nội dung sẽ được phân tích cú pháp và hiển thị, trong khi quá trình tiếp tục với phần nội dung còn lại tiếp tục đến từ mạng.

Đưa ra dưới đây là dòng chảy của Webkit:

Quy trình chính của bộ webkit

Khái niệm cơ bản về phân tích cú pháp
Phân tích cú pháp: Dịch tài liệu sang cấu trúc mà mã có thể sử dụng. Kết quả của việc phân tích cú pháp thường là một cây gồm các nút đại diện cho cấu trúc của tài liệu.

Ngữ pháp: Phân tích cú pháp dựa trên các quy tắc cú pháp mà tài liệu tuân theo: ngôn ngữ hoặc định dạng tài liệu được viết. Mọi định dạng bạn có thể phân tích cú pháp phải có ngữ pháp xác định bao gồm từ vựng và quy tắc cú pháp. Nó được gọi là ngữ pháp tự do ngữ cảnh.

Phân tích cú pháp có thể được tách thành hai quy trình phụ: phân tích từ vựng và phân tích cú pháp.

Phân tích từ vựng: Quá trình chia đầu vào thành các mã thông báo. Mã thông báo là từ vựng ngôn ngữ: tập hợp các khối xây dựng hợp lệ.

Phân tích cú pháp: Việc áp dụng các quy tắc cú pháp ngôn ngữ.

Trình phân tích cú pháp thường phân chia công việc giữa hai thành phần: trình phân tích cú pháp (đôi khi được gọi là trình mã thông báo) chịu trách nhiệm chia đầu vào thành các mã thông báo hợp lệ và trình phân tích cú pháp chịu trách nhiệm xây dựng cây phân tích cú pháp bằng cách phân tích cấu trúc tài liệu theo các quy tắc cú pháp ngôn ngữ. Lexer biết cách loại bỏ các ký tự không liên quan như khoảng trắng và ngắt dòng.

Tài liệu nguồn để phân tích cây

Quá trình phân tích cú pháp là lặp đi lặp lại. Trình phân tích cú pháp thường sẽ yêu cầu trình phân tích từ vựng cung cấp mã thông báo mới và cố gắng so khớp mã thông báo với một trong các quy tắc cú pháp. Nếu một quy tắc được khớp, một nút tương ứng với mã thông báo sẽ được thêm vào cây phân tích cú pháp và trình phân tích cú pháp sẽ yêu cầu một mã thông báo khác.

Nếu không có quy tắc nào phù hợp, trình phân tích cú pháp sẽ lưu trữ mã thông báo bên trong và tiếp tục yêu cầu mã thông báo cho đến khi quy tắc phù hợp
