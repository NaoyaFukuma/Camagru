# Camagru

### 概要
42Tokyoで提供されている、OuterCircleの課題です。
発音的にはフランス語で"カマグリュ"らしいが、意味はわからない。
Instagramみたいな機能を持ったやつ？

### 起動
#### 検証済み動作環境

|結果|OS|Docker|メモ|
|----|----|----|----|
||macOS Sonoma ver.14.2.1|Docker version 26.0.0|個人PC|
||||校舎レビュー用PC|

#### 準備
`.env.example`というファイルの案内に沿って環境変数を設定する。
SSL通信用の自己証明書を作成する。
```sh
fukuma-naoya: resson/Camagru (main =)
% cd config/ssl                                                                                                                      

fukuma-naoya: config/ssl (main *=)
% sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout apache-selfsigned.key -out apache-selfsigned.crt 

Password:
..+...........+++++++++++++++++++++++++++++++++++++++*..+......+....+...........+++++++++++++++++++++++++++++++++++++++*.+.+..................+..............+...+....+......+..+.+..+..........+..+......+.+.................................+......+.........+...+.....+..................+....+...+..+.+......+........+.......+...........+....+...+..+.........+..........+..+...+............+....+...+......+......+...........+...+....+..+.+...............+.....+.......+.................+....+.....+.........+.+...........++++++
..+........+.......+..+....+......+.....+.........+....+...+........+++++++++++++++++++++++++++++++++++++++*.+......+...+.......+.....+....+........+.+.....+.......+........+......+.+.........+.....+....+......+...+..+++++++++++++++++++++++++++++++++++++++*......................+...+.........+...+......+....+...+.....+...+.+...+..+...................+.....+.......+.....+...+......+.+..................+.................+...+.+.........+..+...+...............+.......+..+..........+..+......+....+...+......+..+...............++++++
-----
You are about to be asked to enter information that will be incorporated
into your certificate request.
What you are about to enter is what is called a Distinguished Name or a DN.
There are quite a few fields but you can leave some blank
For some fields there will be a default value,
If you enter '.', the field will be left blank.
-----
Country Name (2 letter code) [AU]:JP
State or Province Name (full name) [Some-State]:Tokyo
Locality Name (eg, city) []:Nishitokyo
Organization Name (eg, company) [Internet Widgits Pty Ltd]:42Tokyo
Organizational Unit Name (eg, section) []:student
Common Name (e.g. server FQDN or YOUR name) []:camagru.com
Email Address []:nfukuma@student.42tokyo.jp
```
プロジェクトルートで、
`make up`
その他の`make`コマンドは`Makefile`内を参照（再起動など）
[https://127.0.0.1](https://127.0.0.1) へアクセスする

### 機能紹介
Wikiへのリンク
