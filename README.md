<h2 align="center">ファイナルファンタジー風CLI アプリ(PHP)</h2>

<img src="https://user-images.githubusercontent.com/69971751/114513597-510f5c80-9c75-11eb-9a90-cdde5edaca7a.png" width=100%>

## :clap:学習教材と製作者様
https://www.techpit.jp/courses/137
(※この教材は有料です。)
<br>講師:ymatsuza 様

## :octocat:開発環境

- PHP 7.3.11
- VSCode（Visual Studio Code）

<p align="center">
  <a href="https://www.php.net/"><img src="https://www.php.net/images/logos/new-php-logo.png" width="120px;" /></a>
  <br>
</p>

## :memo:アプリの機能

<h3>1.CLIのみでFFの戦闘を再現</h3>

①CLIでmain.phpファイルを実行すると自動で敵キャラとの戦闘が始まります。<br>
②味方キャラは攻撃が回ってくる度に1/3の確率で固有スキルを発動します。<br>
③味方か敵が全滅するまで互いの攻撃ターンを回します。<br>

<img src="https://user-images.githubusercontent.com/69971751/114513597-510f5c80-9c75-11eb-9a90-cdde5edaca7a.png" width=50%>

<br>
♪♪♪勝利のファンファーレ♪♪♪
<img src="https://user-images.githubusercontent.com/69971751/114515475-58376a00-9c77-11eb-9430-cefd54acc136.png" width=50%>

## :pencil2:使用方法(Mac)

1.Dockerの導入
<br>
https://www.docker.com/get-started
からDockerをダウンロード。
<br>

2.dockerコマンドとdocker-composeコマンドの確認
<br>
```docker -v``` ```docker-compose -v```
<br>

3.開発環境とプロジェクトのクローン
<br>
```git clone https://github.com/hiroki-sawada0531/EvernoteLikeApp-PHP.ver.git```
<br>

4.開発環境を立ち上げ
<br>
```cd docker_simple_memo_php``` git cloneをしてきたディレクトリの直下まで移動。
<br>
```docker-compose -f .docker_memo/docker-compose.yml up -d``` ... doneが４つ表示されればOK。
<br>

4.サイトにアクセス
<br>
http://localhost:8080/login/ or http://localhost:8080/
にアクセスする。
