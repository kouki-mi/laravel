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
<img src="https://user-images.githubusercontent.com/94271199/149874605-5b24385e-c059-462c-a91b-13faf3ceea0f.PNG" width = "100%">

- アプリを開くと上記の画面が開くので、"START"をクリックする
- その後ログイン画面が開くので、googleアカウントを持っている方は"googleアカウントでログイン"をクリックする
- 通常のログインをする場合は右上の"新規登録"からアカウントを作成し、作成したパスワードでログインする

<img src="https://user-images.githubusercontent.com/94271199/149875218-6265b081-57db-4463-827c-f55f607e7869.PNG" width = "750px">

- ログインに成功すると上記の画面になるので、"計画を追加する"をクリックする

<img src="https://user-images.githubusercontent.com/94271199/149875237-0b9d75e9-8160-471d-9b44-711f0cad834f.PNG" width = "750px">

- その後、自分の目標に向けた計画を入力するフォームが開くので、タイトルと概要を入力する
- "保存"をクリックする

<img src="https://user-images.githubusercontent.com/94271199/149875244-367f4c95-8587-4293-bf36-2d0b15cef23d.PNG" width = "750px">
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
