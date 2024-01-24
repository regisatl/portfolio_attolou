/* This file is generated by Ziggy. */
declare module 'ziggy-js' {
  interface RouteList {
    "sanctum.csrf-cookie": [],
    "ignition.healthCheck": [],
    "ignition.executeSolution": [],
    "ignition.updateConfig": [],
    "welcome": [],
    "contact": [],
    "dashboard": [],
    "skills.index": [],
    "skills.create": [],
    "skills.store": [],
    "skills.show": [
        {
            "name": "skill"
        }
    ],
    "skills.edit": [
        {
            "name": "skill",
            "binding": "id"
        }
    ],
    "skills.update": [
        {
            "name": "skill",
            "binding": "id"
        }
    ],
    "skills.destroy": [
        {
            "name": "skill",
            "binding": "id"
        }
    ],
    "projects.index": [],
    "projects.create": [],
    "projects.store": [],
    "projects.show": [
        {
            "name": "project"
        }
    ],
    "projects.edit": [
        {
            "name": "project",
            "binding": "id"
        }
    ],
    "projects.update": [
        {
            "name": "project",
            "binding": "id"
        }
    ],
    "projects.destroy": [
        {
            "name": "project",
            "binding": "id"
        }
    ],
    "profile.edit": [],
    "profile.update": [],
    "profile.destroy": [],
    "login": [],
    "password.request": [],
    "password.email": [],
    "password.reset": [
        {
            "name": "token"
        }
    ],
    "password.store": [],
    "verification.notice": [],
    "verification.verify": [
        {
            "name": "id"
        },
        {
            "name": "hash"
        }
    ],
    "verification.send": [],
    "password.confirm": [],
    "password.update": [],
    "logout": []
}
}
export {};
