# Deploy to Render

This repository includes a Docker image for the Grav site and a Render Blueprint
in `render.yaml`. The Blueprint deploys the site as a read-only public website:
Grav Admin, Login, and API are disabled, and account files, private config,
runtime data, caches, and logs are excluded from the image. Make content and
design changes in GitHub and push them to `main` to trigger a new deployment.

## Create the Render service

1. Push this repository to GitHub.
2. Sign in to [Render](https://render.com/) and choose **New → Blueprint**.
3. Connect `alvinjamescatapang/my-grav-site` and select the `main` branch.
4. Review the `tech-innovators-society` web service and apply the Blueprint.
5. Wait for the Docker build and health check. Render will show the public
   `onrender.com` URL when deployment is ready.

The Blueprint selects Render's free instance in Singapore. Free instances can
sleep while idle, so the first visit after inactivity may take longer. This
deployment has no persistent disk because the public site content is part of
the image and runtime cache/logs can be recreated.

## Run the container locally

From the repository root:

```sh
docker build -t tech-innovators-society .
docker run --rm -p 10000:10000 tech-innovators-society
```

Open <http://localhost:10000/>.
