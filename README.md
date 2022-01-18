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

<img src="https://user-images.githubusercontent.com/94271199/149875218-6265b081-57db-4463-827c-f55f607e7869.PNG" width = "100%">

- ログインに成功すると上記の画面になるので、"計画を追加する"をクリックする

<img src="https://user-images.githubusercontent.com/94271199/149875237-0b9d75e9-8160-471d-9b44-711f0cad834f.PNG" width = "100%">

- その後、自分の目標に向けた計画を入力するフォームが開くので、タイトルと概要を入力する
- "保存"をクリックする

<img src="https://user-images.githubusercontent.com/94271199/149875244-367f4c95-8587-4293-bf36-2d0b15cef23d.PNG" width = "100%">

- 保存に成功すると上記の画面になるので、"詳細"をクリックする

<img src="https://user-images.githubusercontent.com/94271199/149875250-ba570fdd-e3a0-40fd-a811-3f1c894c8ca2.PNG" width = "100%">

- 上記の画面が、計画についての詳細画面となっている
- todoメモを作成する際は、"記録を追加する"をクリックする
- その後フォームが開くので、計画を設定した時と同様にタイトルと概要を記入し、"保存"をクリックする

<img src="https://user-images.githubusercontent.com/94271199/149875259-cfca54cb-2319-4981-b78a-40716ca2af49.PNG" width = "100%">

- 保存に成功すると、詳細画面に入力した内容が表示される
- メモした内容を完了した場合は"編集"をクリックすると、上記の画面が表示されるので、そこから"完了にする"をクリックする

<img src="https://user-images.githubusercontent.com/94271199/149875265-a5380005-53a4-4df3-8985-e7a745e5eb24.PNG" width = "100%">
- 完了した内容が増えるとレベルが上がっていき、上記のようにポケモンが進化する

## 主な機能
- ログイン機能:メールアドレスとパスワードを設定する通常のログインとgoogleアカウントを利用したソーシャルログイン
- toDOリスト:これからやる事を記録する機能
- 画像の変化:完了したタスクが増えると、ポケモンの画像が変化する

## 工夫した点
- apiを利用したポケモンの画像の取得 (/app/Http/Controllers/PokemonController.php)
- googleアカウントを利用したソーシャルログイン機能 (/app/Http/Controllers/GoogleLoginController.php)
