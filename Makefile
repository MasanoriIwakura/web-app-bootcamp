HOME = ${pwd}

run_nuxt:
	cd front/nuxt && yarn dev && cd $(HOME)
