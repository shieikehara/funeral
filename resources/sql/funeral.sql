--ユーザー情報テーブル
CREATE TABLE `users` (
    `id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `tel` varchar(11) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `funeral_id` int(11) NOT NULL,
    `admin` int(11) NOT NULL DEFAULT 0   
);

--葬儀詳細登録テーブル
CREATE TABLE `funeral` (
    `id` int(11) NOT NULL,
    `family_name` varchar(50) NOT NULL,
    `deceased` varchar(50) NOT NULL,
    `name` varchar(50) NOT NULL,
    `day1` varchar(50),
    `day2` varchar(50),
    `dinner` int(11),
    `lunch` int(11),
    `funeral_style` varchar(50) NOT NULL,
    `created_at` datetime,
    `updated_at` datetime
);

--葬儀詳細情報を登録
INSERT INTO `funeral` (`id`, `family_name`, `deceased`, `name`, `day1`, `day2`, `dinner`, `lunch`, `funeral_style`, `created_at`, `updated_at`) VALUES
(1, '山田家', '山田太郎', '山田次郎', '2023-01-01', '202301-02', '10', '10', '2日間仏式', now(), now());


--生花注文情報テーブル
CREATE TABLE `flower` (
    `id` int(11) NOT NULL,
    `name`varchar(50) NOT NULL,
    `tel` varchar(11) NOT NULL,
    `nameplate` varchar(100) NOT NULL,
    `flower` varchar(50) NOT NULL,
    `volume` int(11) NOT NULL,
    `funeral_id` int(11) NOT NULL,
    `created_at` datetime
);

--ユーザーが生花の注文した際のテーブル
CREATE TABLE `u_flowers` (
    `id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `flower_id` int(11) NOT NULL,
    `created_at` datetime
);

--問い合わせ情報テーブル
CREATE TABLE `forms` (
    `id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `tel` varchar(11),
    `mail` varchar(100) NOT NULL,
    `body` varchar(500) NOT NULL,
    `created_at` datetime,
    `updated_at` datetime
);

