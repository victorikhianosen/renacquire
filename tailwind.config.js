/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            sm: "480px",
            md: "768px",
            lg: "1020px",
            xl: "1440px",
        },
        extend: {
            colors: {
                primary: "#254868",
                secondary: "#EBC585",
                black: "#1A1510",
                gray: "#5f5b58",
                lightGray: "#b9babd",
                white: "#FFFFFF",
                softWhite: "#F7F5F4 ",
                textGray: "#656565",
                green: "#54BE73",
                grayBorder: "#E5E3E3",
            },
            fontFamily: {
                sans: ["DM Sans", "sans-serif"],
            },
        },
    },
    plugins: [],
};
