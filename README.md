# DBMS Final Project - 托嬰小幫手
## 簡述
- 網頁架構使用 HTML、CSS、JavaScript 撰寫
- CRUD 功能使用 PHP (內含SQL) 撰寫
- 使用 xampp 連結資料庫和網頁
- 資料庫使用 MariaDB
- 托嬰小幫手理念: 於網站中整理托嬰機構以及生育補助的資訊，讓使用者可以查詢以及收藏，也可以在評論區寫下對托嬰中心的評價，讓其他使用者可以參考，並將生育資料視覺化、展示一些對於生育率的分析，更有與生育相關的問答小遊戲增加趣味性。

## 如何安裝托嬰小幫手
1. 安裝 xampp
2. clone repository
3. 將 clone 下來的檔案放入電腦中 xampp/hotdocs/ 資料夾下 
4. 開啟 xampp，啟動 apache 和 MySQL
5. 打開 phpMyAdmin，將下載的檔案中的 "new_insertion.sql" import 到資料庫裡

## 如何使用托嬰小幫手
1. 每次使用前都要開啟 xampp，啟動 apache 和 MySQL
2. 打開瀏覽器輸入localhost/DBMS_FinalProject_ChildcareHelper/index.php，進入登入頁面，註冊帳號後登入即可使用托嬰小幫手
更詳細的解說可參考 demo 影片: https://drive.google.com/file/d/1GNvwJd-CzjReUIeKqU0iN0nyAL9GWpcx/view?usp=sharing

## 托嬰小幫手功能
1. 生育率小補帖：視覺化的圖表以及分析生育率高低的原因
2. 評論：使用者可以在評論區留下對托嬰中心的評價，使用者們可以分享、交流意見
3. 托嬰中心：列出該縣市所有托嬰中心的相關資訊，並附有地圖供使用者查看托嬰中心的地理位置
4. 我的最愛：被加入我的最愛的托嬰中心會顯示在我的最愛的列表當中
5. 小測驗：有關生育率知識的問答小測驗

參考來源: https://code-projects.org/simple-scheduling-system-in-php-with-source-code/
