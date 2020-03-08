import { useRouter } from "next/router";

const Index = () => {
  const router = useRouter();
  const { app } = router.query;

  return (
    <div className="container">
      <div className="row">
        <div className="col-10">
          <h2 className="nes-text is-primary">Web App Bootcamp for Next.js</h2>
          <p>Created by MasanoriIwakura</p>
        </div>
        <div className="col-2">
          <a
            href="https://github.com/MasanoriIwakura/web-app-bootcamp"
            target="_blank"
          >
            <i className="nes-icon github is-large"></i>
          </a>
        </div>
      </div>

      <div className="row">
        <div className="col">
          <h3>{app}</h3>
        </div>
      </div>

      <div className="main">
        <div className="row">
          <div className="col">
            <logo />
          </div>
        </div>

        <div className="row">
          <div className="col">
            <button className="nes-btn is-primary">Add</button>
          </div>
          <div className="col"></div>
        </div>
      </div>
    </div>
  );
};

export default Index;
