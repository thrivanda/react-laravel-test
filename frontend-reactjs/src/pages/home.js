import Axios from "axios";
import { useState, useEffect } from "react"

function Home() {
  const [data, setData] = useState(null);

  useEffect(() => {
    Axios
      .get("http//localhost:8000/api/menus")
      .then((res) => {
        setData(res.data);
      })
      .catch((error) => {
        console.log(error);
      });
  }, []);

 
  return (
    <div>
      home
    </div>
  );
  
}

export default Home;

