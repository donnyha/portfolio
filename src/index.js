import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import { RouterProvider } from "react-router-dom";
import { router } from './router';

const googleAnalyticsId = process.env.REACT_APP_GOOGLE_ANALYTICS_ID;

if (googleAnalyticsId) {
  const script = document.createElement('script');
  script.src = `https://www.googletagmanager.com/gtag/js?id=${googleAnalyticsId}`;
  script.async = true;
  document.head.appendChild(script);

  window.dataLayer = window.dataLayer || [];
  function gtag(){window.dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', googleAnalyticsId);
}

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
    <RouterProvider router={ router } />
  </React.StrictMode>
);