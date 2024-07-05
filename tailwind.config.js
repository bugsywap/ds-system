/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            screens: {
                phone: "360px",
                tablet: "768px",
                tabletm: "1024px",
                laptops: "1280px",
                laptopm: "1440px",
                desktops: "1600px",
                desktopm: "1920px",
            },
            colors: {
                dsblack: "#151515",
                dsblue: "#4bc3fe",
                dsgreen: "#3ac08f",
                dswhite: "#f9ffed",

                "curious-blue": {
                    50: "#f1f9fe",
                    100: "#e2f2fc",
                    200: "#bee4f9",
                    300: "#84d0f5",
                    400: "#43b7ed",
                    500: "#1a9edd",
                    600: "#0d7fbc",
                    700: "#0c6498",
                    800: "#0e567e",
                    900: "#114869",
                    950: "#0c2d45",
                },
                shamrock: {
                    50: "#edfcf5",
                    100: "#d4f7e5",
                    200: "#adedcf",
                    300: "#78ddb5",
                    400: "#3ac08f",
                    500: "#1eab7c",
                    600: "#118a64",
                    700: "#0e6e53",
                    800: "#0d5843",
                    900: "#0c4838",
                    950: "#062820",
                },
            },
        },
        fontFamily: {
            poppins: ["Poppins", "sans-serif"],
            satoshi: ["Satoshi", "sans-serif"],
        },
    },
    plugins: [require("flowbite/plugin")],
};
