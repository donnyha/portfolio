import { createBrowserRouter } from "react-router-dom";

import Main from './pages/Main';
import Analyst from './pages/Analyst';
import Dev from './pages/Dev';
import Error from "./pages/Error";

export const router = createBrowserRouter([
  {
    path: '/',
    element: <Main />,
    errorElement: <Error />,
  },
  {
    path: '/analyst',
    element: <Analyst />
  },
  {
    path: '/dev',
    element: <Dev />
  }
]);