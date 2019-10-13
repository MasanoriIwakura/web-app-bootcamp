# WEBアプリ作成ブートキャンプ

## 概要

色々なプログラミング言語・フレームワークを使用して同じ仕様のアプリを作成する  
今回はCURDを全て網羅した日記投稿アプリを作成する

## 機能

- 記事登録
- 記事更新
- 記事削除
- 記事検索(idの完全一致, titleの部分一致)

## 画面

- 記事一覧
- 記事登録・更新画面

## DB定義

- id(連番)
- title(varchar)
- body(varchar)
- created_at(timestamp)
- updated_at(timestamp)

## 技術選定

フロント、APIを分離した構成とする

例)  
フロント：Vue.js, API:Laravel

## 使用言語・フレームワーク

## フロントエンド

- Nuxt.js
- React

遊び心を入れたいため、CSSフレームワークに`NES.css`を使用する

## サーバーサイド(API)

後でフレームワークを増やせるように、フォルダ名を「言語名-フレームワーク名」で作成する  
全てコンテナ化する

- PHP(Laravel)
- Ruby(Rails)
- Go(gin)
- Java(Spring)
- C#(ASP.NET Core)
- Node.js(Express)