HOME = ${pwd}

run_nuxt:
	cd front/nuxt && yarn dev && cd $(HOME)
	
run_next:
	cd front/next && yarn dev && cd $(HOME)
