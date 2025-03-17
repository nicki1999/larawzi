export default [
  {
    ignores: ["node_modules", "dist"],
  },
  {
    languageOptions: {
      ecmaVersion: "latest",
      sourceType: "module",
    },
    plugins: {
      vue: require("eslint-plugin-vue"),
    },
    rules: {
      "vue/multi-word-component-names": "off",
    },
  },
];
