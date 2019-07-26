export const routes: any = {
    main: { url: 'articles' },
    admin: {
        url: 'api/admin/',
        languages: { url: 'languages/' },
        categories: { url: 'categories/' },
        menus: { url: 'menus/' },
        users: { url: 'users/' },
        user: { url: 'user/' },
        roles: { url: 'roles/' },
        role: { url: 'role/' },
        permissions: { url: 'permissions/' },
        permission: { url: 'permission/' }
    },
    auth: {
        url: 'api/auth/',
        register: { url: 'register/' },
        'reset-password': { url: 'reset-password/' },
        'is-authenticated': { url: 'is-authenticated/' },
        login: { url: 'login/' },
        logout: { url: 'logout/' }
    },
    user: {
        url: 'api/user/',
        info: { url: 'info/' },
        menus: { url: 'menus/' },
        dashboard: { url: 'dashboard/' },
        management: { url: 'management/' },
        'profile-image': { url: 'profile-image/' },
        profile: { url: 'profile/' }
    },
    article: {
        url: 'api/article/',
        article: { url: 'article/' },
        content: { url: 'content/' },
        restore: { url: 'restore/' },
        'force-delete': { url: 'force-delete/' },
        permission: { url: 'permission/' },
        articles: { url: 'articles/' },
        trash: { url: 'trashed-articles/' },
    },
    image: {
        url: 'api/image/',
        image: { url: 'image/' },
        thumb: { url: 'thumb/' },
        images: { url: 'images/' },
        edit: { url: 'edit/' }
    },
    storage: {
        url: 'storage/',
        images: {
            url: 'images/',
            thumbs: {
                url: 'thumbs/'
            }
        }
    },
    public: {
        url: '',
        image: {
            url: 'images/',
            author: { url: 'author/' }
        }
    }
};
