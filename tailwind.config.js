/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      maxWidth: {
        custom: "calc(1100px / 3 - 20px)",
      },
      backgroundImage: {
        secondBox: "url('./images/secondBox.webp')",
      },
    },
  },
  plugins: [],
};
