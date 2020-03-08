import React from "react";
import App, { Container } from "next/app";
import "nes.css/css/nes.min.css";
import "../assets/css/simple-grid.min.css";
import "../assets/css/style.css";

export default class MyApp extends App {
  render() {
    const { Component, pageProps } = this.props;

    return <Component {...pageProps} />;
  }
}
