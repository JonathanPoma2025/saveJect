/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'verde1': 'B2B377',
            'verde2': 'D2D180',
            'verde3': 'E5E483',
            'verde4': 'F1F5A8',
        },
      extend: {},
    },
    plugins: [],
  }
