FROM mcr.microsoft.com/dotnet/core/sdk:3.0-alpine AS build
LABEL maintainer="MasanoriIwakura"

WORKDIR /app

COPY *.sln .
COPY bootcamp/*.csproj ./bootcamp/
RUN dotnet restore

COPY bootcamp ./bootcamp
WORKDIR /app/bootcamp
RUN dotnet publish -c Release -o out


FROM mcr.microsoft.com/dotnet/core/aspnet:3.0-alpine AS runtime
WORKDIR /app
COPY --from=build /app/bootcamp/out ./
ENTRYPOINT ["dotnet", "bootcamp.dll"]
