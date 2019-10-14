# マイグレーションについて

マイグレーションツールはgo-lang製の`migrate`を使用

## Docker image

`migrate/migrate:v4.6.2`

## 使用方法

詳細は公式参照  
https://github.com/golang-migrate/migrate

### Docker環境での実行方法

ENTRYPOINTでコマンドの制限がかかっている、`migrate`コマンドしか実行できない。  
そのため、毎回`docker container run(docker run)`にて実行する必要がある

面倒なので、シェルスクリプトを作成

```bash
# 実行例
# Create migration file
$ ./migration.sh create create_example
# Run migration
$ ./migration.sh up
# Rollback migration
$ ./migration.sh down
```
