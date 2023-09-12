# Frontend Mentor - QR code component solution

This is a solution to the [QR code component challenge on Frontend Mentor](https://www.frontendmentor.io/challenges/qr-code-component-iux_sIO_H). Frontend Mentor challenges help you improve your coding skills by building realistic projects.

## Table of contents

- [Overview](#overview)
  - [Screenshot](#screenshot)
  - [Links](#links)
- [My process](#my-process)
  - [Built with](#built-with)
  - [What I learned](#what-i-learned)
- [Author](#author)
- [Acknowledgments](#acknowledgments)


## Overview
This is a solution to the [QR code component challenge on Frontend Mentor]


### Screenshot

![](./design/done.png)

### Links

- Solution URL: [Add solution URL here](https://your-solution-url.com)
- Live Site URL: (https://roguechocoholic.github.io/)

## My process

- Began with the html format and created a div [containerMain] with the width and height of 100 viewport width and height.
- added display: flex; ,justify-content: center; and align-items: center; to center its contents.
- Created another div [qrContainer] to contain the QR and the texts.
- Justified its contents same way as in the first div.
- created 2 more div tags inside the [qrContainer] to hold the QR [imgContainer] and text [textContainer].
- added qr as background of [imgContainer], text inside [h2], [p] with font css font sizes

### Built with

- Semantic HTML5 markup
- CSS custom properties
- Flexbox
- CSS Grid

### What I learned

```html
<div class="qrContainer"></div>
```

```css
.qrContainer {
  width: 350px;
  height: 550px;

  border-radius: 20px;

  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;

  background-color: hsl(0, 0%, 100%);

  box-shadow: 1px 1px 50px #00000027;
}
```


## Author

- Frontend Mentor - [@RogueChocoholic](https://www.frontendmentor.io/profile/RogueChocoholic)

