import js from '@eslint/js';
import globals from 'globals';
import react from 'eslint-plugin-react';
import hooks from 'eslint-plugin-react-hooks';
export default [
  { ignores: ['node_modules/**', 'public/build/**'] },
  js.configs.recommended,
  { files: ['resources/js/**/*.{js,jsx}'], languageOptions: { ecmaVersion: 'latest', sourceType: 'module', parserOptions: { ecmaFeatures: { jsx: true } }, globals: { ...globals.browser } }, plugins: { react, 'react-hooks': hooks }, settings: { react: { version: 'detect' } }, rules: { ...react.configs.recommended.rules, ...react.configs['jsx-runtime'].rules, ...hooks.configs.recommended.rules, 'react/prop-types': 'off', 'no-unused-vars': ['error', { varsIgnorePattern: '^[A-Z_]', argsIgnorePattern: '^_' }] } }
];
