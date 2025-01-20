# Weather App

A simple weather application that fetches and displays weather data.

## Setup

1. Clone the repository
2. Copy `.env.example` to `.env`
3. Add your API URL to the `.env` file

## Environment Variables

- `API_URL`: The URL of the API to fetch weather data

## Usage

### Using Docker

1. Build the Docker image: docker build . -t phptest
2. Run container based on created image: docker run -it --rm --name test phptest