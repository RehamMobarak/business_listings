module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',

    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
      extend: {},
      opacity: ['responsive', 'hover', 'focus', 'disabled'],
  },
    plugins: [
        require("@tailwindcss/ui"),
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/aspect-ratio"),
    ],
};
