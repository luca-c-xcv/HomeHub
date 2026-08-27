# HomeCloud

HomeCloud is a self-hosted home server providing personal cloud storage,
media streaming, file sharing, home automation, and other services.

The infrastructure is based on **OpenMediaVault**, **Docker**, and
**Docker Compose**.

---

## Architecture

The current HomeCloud infrastructure is based on a Raspberry Pi 4.

```text
                         Internet
                            │
                         Router
                            │
                            ▼
                    ┌──────────────┐
                    │    RPi 4     │
                    │              │
                    │     OMV      │
                    │      │       │
                    │    Docker    │
                    │      │       │
                    │ ┌────┼─────┐ │
                    │ │    │     │ │
                    │ NC  Plex   HA│
                    │ │    │     │ │
                    │ └────┼─────┘ │
                    │   Traefik    │
                    └────┬──────┬──┘
                         │      │
                      USB 3    USB 2
                         │      │
                         ▼      ▼
                  ┌───────────┐ UPS
                  │ 4-bay HDD │
                  └─────┬─────┘
                        │
                   HDD storage
```

### Hardware

* **Raspberry Pi 4** — main server
* **SSD** — operating system and software
* **FANTEC QB-35US3-6G** — HDD storage
* **UPS** — power protection

### Software

* **OpenMediaVault** — base operating system and NAS management
* **Docker** — application containers
* **Docker Compose** — service deployment
* **Traefik** — HTTP reverse proxy

### Services

Current and planned services include:

* Nextcloud
* Plex
* Home Assistant
* SMB
* FTP/SFTP
* Traefik

---

## Repository Structure

```text
.
├── compose/
│   ├── nextcloud/
│   ├── plex/
│   ├── homeassistant/
│   └── traefik/
│
├── config/
├── scripts/
├── docs/
│
├── .gitignore
└── README.md
```

The `docs/` directory will contain the detailed documentation of the
infrastructure, installation procedures, configuration, and architectural
decisions.

---

## Installation

The HomeCloud is intended to run on a Raspberry Pi 4 with OpenMediaVault.

The general installation process is:

1. Install OpenMediaVault.
2. Configure the storage and network.
3. Install Docker.
4. Clone this repository.
5. Configure the required environment variables.
6. Deploy the services with Docker Compose.

Detailed installation instructions will be added to the documentation.

---

## Configuration

Service configuration is stored separately from application data.

Sensitive information such as passwords, tokens, and private keys must not
be committed to the repository.

---

## Updates

The operating system and Docker services are managed independently.

OpenMediaVault is responsible for the base system, while Docker Compose is
used to manage the application services.

---

## Documentation

Detailed documentation will be added progressively under `docs/`.

The documentation will cover topics such as:

* Infrastructure
* Installation
* Storage
* Docker
* Networking
* Services
* Backup
* Security
* Architectural decisions


