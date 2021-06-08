import { createBrowserRouter } from "react-router-dom";

import Main from './pages/Main';
import Error from "./pages/Error";

export const router = createBrowserRouter([
  {
    path: '/',
    element: <Main />,
    errorElement: <Error />,
  }
]);