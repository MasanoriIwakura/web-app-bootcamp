import Link from "next/link";

const DiaryList = () => {
  const diaries = [
    {
      id: "1",
      title: "Title",
      body: "Body aaaaaa",
      updated_at: "2020/03/08"
    }
  ];

  const diaryTable = diaries.map(d => {
    return (
      <tr key={d.id}>
        <td>{d.id}</td>
        <td>{d.title}</td>
        <td>{d.body}</td>
        <td>{d.updated_at}</td>
        <td>
          <Link href="/">
            <a className="nes-btn is-success">Edit</a>
          </Link>
        </td>
        <td>
          <button
            type="button"
            className="nes-btn is-warning"
            onClick={deleteAction.bind(d.id)}
          >
            Delete
          </button>
        </td>
      </tr>
    );
  });

  const dialog = (
    <dialog className="nes-dialog is-rounded" id="dialog-rounded">
      <form method="dialog">
        <p class="title">Danger</p>
        <p>Do you want to delete it?</p>
        <menu className="dialog-menu">
          <button className="nes-btn">Cancel</button>
          <button className="nes-btn is-error">Delete</button>
        </menu>
      </form>
    </dialog>
  );

  return (
    <div className="diary-list">
      <div className="row">
        <div className="col"></div>
        <div className="col"></div>
      </div>

      <div className="row">
        <table className="nes-table is-borderd is-centerd">
          <thead>
            <tr>
              <th>ID</th>
              <th>TITLE</th>
              <th>BODY</th>
              <th>UPDATED AT</th>
              <th>EDIT</th>
              <th>DELETE</th>
            </tr>
          </thead>
          <tbody>{diaryTable}</tbody>
        </table>
      </div>
    </div>
  );
};

const deleteAction = id => {
  console.log("delete:" + id);
};

export default DiaryList;
