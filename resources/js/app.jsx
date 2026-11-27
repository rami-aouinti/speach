import React from 'react';
import { createRoot } from 'react-dom/client';
import '../css/app.css';
function App() {
  return <main className="page"><section className="card">
    <div className="brand-mark">S</div><p className="eyebrow">WELCOME TO</p><h1>Speach</h1>
    <p className="description">Your Laravel and React application is up and running.</p>
    <div className="status"><span /> Application ready</div><footer>Laravel · React · PostgreSQL</footer>
  </section></main>;
}
createRoot(document.getElementById('app')).render(<React.StrictMode><App /></React.StrictMode>);
