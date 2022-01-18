# Level up checker

## 概要
目標に向けてやった事の量に応じて、ポケモンの画像が変化するアプリです。
物事を継続する際にモチベーションを保てるような記録アプリが欲しいと思い、このアプリを作成しました。

## 環境・使用言語等
- windows 10
- MAMP
- php 7.4.1
- Laravel 8.77.1
- MySQL

## 使い方
<img src="https://user-images.githubusercontent.com/94271199/149874605-5b24385e-c059-462c-a91b-13faf3ceea0f.PNG" width = "600px">
アプリを開くと上記の画面が開くので、STARTを押す<br>
<img src="https://user-images.githubusercontent.com/94271199/149874605-5b24385e-c059-462c-a91b-13faf3ceea0f.PNG" width = "600px">
<img src="https://user-images.githubusercontent.com/94271199/149874605-5b24385e-c059-462c-a91b-13faf3ceea0f.PNG" width = "600px">
<img src="https://user-images.githubusercontent.com/94271199/149874605-5b24385e-c059-462c-a91b-13faf3ceea0f.PNG" width = "600px">
<img src="https://user-images.githubusercontent.com/94271199/149874605-5b24385e-c059-462c-a91b-13faf3ceea0f.PNG" width = "600px">
<img src="https://user-images.githubusercontent.com/94271199/149874605-5b24385e-c059-462c-a91b-13faf3ceea0f.PNG" width = "600px">
<img src="https://user-images.githubusercontent.com/94271199/149874605-5b24385e-c059-462c-a91b-13faf3ceea0f.PNG" width = "600px">
<img src="https://user-images.githubusercontent.com/94271199/149874605-5b24385e-c059-462c-a91b-13faf3ceea0f.PNG" width = "600px">

## 主な機能
- ログイン機能:メールアドレスとパスワードを設定する通常のログインとgoogleアカウントを利用したソーシャルログイン
- toDOリスト:これからやる事を記録する機能
- 画像の変化:完了したタスクが増えると、ポケモンの画像が変化する

## 工夫した点
- apiを利用したポケモンの画像の取得 (/app/Http/Controllers/PokemonController.php)
- googleアカウントを利用したソーシャルログイン機能 (/app/Http/Controllers/GoogleLoginController.php)
