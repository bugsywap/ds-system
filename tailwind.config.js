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

                malibu: {
                    50: "#f0f9ff",
                    100: "#dff1ff",
                    200: "#b8e5ff",
                    300: "#79d1ff",
                    400: "#4bc3fe",
                    500: "#07a3f0",
                    600: "#0081cd",
                    700: "#0066a6",
                    800: "#035789",
                    900: "#094971",
                    950: "#062d4b",
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
