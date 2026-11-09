# Code, Kalaam & Kashmir

I’m **Peerzada Anzar Azmat**, a software engineer from Srinagar, now based in Bengaluru. This portfolio brings together the software I build, the Urdu poetry I perform, and the communities I’ve been part of through Kath Baath and IEEE.

[Explore the portfolio](https://anzar-azmat-portfolio.inzi00.chatgpt.site/) · [GitHub Pages](https://anzar00.github.io/) · [LinkedIn](https://www.linkedin.com/in/peerzadaanzar/)

## Explore the scene

Drag to orbit the Kashmir-inspired island, or focus the scene and use the arrow keys. Three objects introduce different parts of the portfolio:

| Object | Chapter | What you’ll find |
| --- | --- | --- |
| Laptop | The Engineer | My work at Eurofins and selected projects, including Family Tree Visualizer and DRS-UNET. |
| Microphone | The Poet | Three Urdu poetry recordings from YourQuote’s Srinagar open mics and Kath Baath’s Kalaam-e-Aam. |
| Chinar tree | The Connector | Kath Baath, IEEE volunteering, and literary activities at New Horizon College of Engineering. |

You can also use the chapter buttons or scroll directly to the content. The scene has pause and reset controls, and each poetry recording includes a direct YouTube link.

## Run locally

The site uses HTML, CSS, JavaScript, and WebGL. There’s no package installation or build step. With Git and Python 3 installed:

```sh
git clone https://github.com/anzar00/anzar00.github.io.git
cd anzar00.github.io
python -m http.server 8000
```

Open [localhost:8000](http://localhost:8000/). On systems where Python 3 is installed as `python3`, use `python3 -m http.server 8000`.

## Edit the portfolio

| File | What to edit |
| --- | --- |
| [index.html](index.html) | Page sections, biography, career timeline, and project cards. |
| [style.css](style.css) | Typography, colors, responsive layouts, and motion styles. |
| [scene.js](scene.js) | WebGL geometry, camera movement, and the positions of clickable objects. |
| [app.js](app.js) | Chapter interactions, project filters and details, and poetry playback. |

When changing a project or recording, update its visible label in `index.html` and its corresponding details or video ID in `app.js`.

The previous portfolio is preserved on [`backup/pre-3d-portfolio`](https://github.com/anzar00/anzar00.github.io/tree/backup/pre-3d-portfolio).
